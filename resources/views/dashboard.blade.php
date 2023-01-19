<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Goodmorning, goodafternoon or goodevening depending on the current time --}}
                    <h1 class="text-3xl font-bold text-center">
                        {{ __('Goede' . (date('H') < 12 ? 'morgen' : (date('H') < 18 ? 'middag' : 'avond')) . ', ' . Auth::user()->name) . ' [' . Auth::user()->employee->function->name . ']' }}
                    </h1>
                    {{-- Het is vandaag <todays date> --}}
                    <h2 class="text-xl font-semibold text-center">
                        {{ __('Het is vandaag ' . date('d-m-Y')) }}
                    </h2>

                </div>
            </div>
        </div>
</x-app-layout>
