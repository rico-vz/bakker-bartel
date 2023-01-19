<!DOCTYPE html>
<html>

<head>
    <title>Laravel Tailwind CSS DatePicker Example - NiceSnippets.com</title>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/datepicker.js"></script>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vakantie aanvraag formulier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action=".............">
                    @csrf
                    <div class="p-6">
                        <!-- start_date -->                        
                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                <div class="container mx-auto py-2 md:py-10">
                                    <div class="mb-5 w-64">
                                        <label for="datepicker">Begin datum</label>
                                        <div class="relative">
                                            <input type="hidden" name="start_date" x-ref="date">
                                            <input type="text" readonly x-model="datepickerValue"
                                                @click="showDatepicker = !showDatepicker"
                                                @keydown.escape="showDatepicker = false"
                                                class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                placeholder="Select date">

                                            <div class="absolute top-0 right-0 px-3 py-2">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                style="width: 17rem" x-show.transition="showDatepicker"
                                                @click.away="showDatepicker = false">
                                                <div class="flex justify-between items-center mb-2">
                                                    <div>
                                                        <span x-text="MONTH_NAMES[month]"
                                                            class="text-lg font-bold text-gray-800"></span>
                                                        <span x-text="year"
                                                            class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                    </div>
                                                    <div>
                                                        <button type="button"
                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                            :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                                            :disabled="month == 0 ? true : false"
                                                            @click="month--; getNoOfDays()">
                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M15 19l-7-7 7-7" />
                                                            </svg>
                                                        </button>
                                                        <button type="button"
                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                            :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                                            :disabled="month == 11 ? true : false"
                                                            @click="month++; getNoOfDays()">
                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M9 5l7 7-7 7" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap mb-3 -mx-1">
                                                    <template x-for="(day, index) in DAYS" :key="index">
                                                        <div style="width: 14.26%" class="px-1">
                                                            <div x-text="day"
                                                                class="text-gray-800 font-medium text-center text-xs">
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                                <div class="flex flex-wrap -mx-1">
                                                    <template x-for="blankday in blankdays">
                                                        <div style="width: 14.28%"
                                                            class="text-center border p-1 border-transparent text-sm">
                                                        </div>
                                                    </template>
                                                    <template x-for="(date, dateIndex) in no_of_days"
                                                        :key="dateIndex">
                                                        <div style="width: 14.28%" class="px-1 mb-1">
                                                            <div @click="getDateValue(date)" x-text="date"
                                                                class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                :class="{ 'bg-blue-500 text-white': isToday(date) ==
                                                                    true, 'text-gray-700 hover:bg-blue-200': isToday(
                                                                        date) == false }">
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5 w-64">
                                        <label for="datepicker">Eind datum</label>
                                        <div class="relative">
                                            <input type="hidden" name="start_date" x-ref="date">
                                            <input type="text" readonly x-model="datepickerValue"
                                                @click="showDatepicker = !showDatepicker"
                                                @keydown.escape="showDatepicker = false"
                                                class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                placeholder="Select date">

                                            <div class="absolute top-0 right-0 px-3 py-2">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                style="width: 17rem" x-show.transition="showDatepicker"
                                                @click.away="showDatepicker = false">
                                                <div class="flex justify-between items-center mb-2">
                                                    <div>
                                                        <span x-text="MONTH_NAMES[month]"
                                                            class="text-lg font-bold text-gray-800"></span>
                                                        <span x-text="year"
                                                            class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                    </div>
                                                    <div>
                                                        <button type="button"
                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                            :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                                            :disabled="month == 0 ? true : false"
                                                            @click="month--; getNoOfDays()">
                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M15 19l-7-7 7-7" />
                                                            </svg>
                                                        </button>
                                                        <button type="button"
                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                            :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                                            :disabled="month == 11 ? true : false"
                                                            @click="month++; getNoOfDays()">
                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M9 5l7 7-7 7" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap mb-3 -mx-1">
                                                    <template x-for="(day, index) in DAYS" :key="index">
                                                        <div style="width: 14.26%" class="px-1">
                                                            <div x-text="day"
                                                                class="text-gray-800 font-medium text-center text-xs">
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                                <div class="flex flex-wrap -mx-1">
                                                    <template x-for="blankday in blankdays">
                                                        <div style="width: 14.28%"
                                                            class="text-center border p-1 border-transparent text-sm">
                                                        </div>
                                                    </template>
                                                    <template x-for="(date, dateIndex) in no_of_days"
                                                        :key="dateIndex">
                                                        <div style="width: 14.28%" class="px-1 mb-1">
                                                            <div @click="getDateValue(date)" x-text="date"
                                                                class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                :class="{ 'bg-blue-500 text-white': isToday(date) ==
                                                                    true, 'text-gray-700 hover:bg-blue-200': isToday(
                                                                        date) == false }">
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <!-- end_date -->
                        <!-- reason -->
                        <div>
                            <x-input-label for="reason" :value="__('Reden van aanvraag:')" />
                            <x-text-input id="reason" class="block mt-1 w-full" type="text" name="reason"
                                :value="old('reason')" required autofocus />
                            <x-input-error :messages="$errors->get('reason')" class="mt-2" />
                        </div>
                        <div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('Verzoek indienen') }}
                            </x-primary-button>
                        </div>
                    </div>
                    <!-- hidden input -->
                    <!-- employee_id -->
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
