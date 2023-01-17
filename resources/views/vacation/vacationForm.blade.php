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

                    
                    <!-- start_date -->
                    <!-- end_date -->
                    <!-- reason -->                    
                    <div class="p-6">
                        <div>
                            <x-input-label for="reason" :value="__('Reden van aanvraag:')" />
                            <x-text-input id="reason" class="block mt-1 w-full" type="text" name="reason" :value="old('reason')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
