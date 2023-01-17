<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action=".............">
        @csrf

        <!-- employee_id -->
        <!-- start_date -->
        <!-- end_date -->
        <!-- reason -->
        
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Verzoek indienen') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
