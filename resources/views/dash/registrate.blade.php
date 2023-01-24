<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Registreren') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- First name -->
            <div>
                <x-input-label for="first_name" :value="__('Voornaam')" />
                <x-text-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')" required
                    autofocus />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>
            
            <!-- Last name -->
            <div>
                <x-input-label for="last_name" :value="__('Achternaam')" />
                <x-text-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required
                    autofocus />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            {{-- Date of birth --}}

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Phone number --}}

            {{-- Address --}}
            <div>
                <x-input-label for="address" :value="__('Adres')" />
                <x-text-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required
                    autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            {{-- Function // dropdown met namen met hidden id-numbers --}}

            {{-- Employee since --}}
            
            {{-- Username --}}
            <div>
                <x-input-label for="username" :value="__('Gebruikersnaam')" />
                <x-text-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('username')" required
                    autofocus />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Wachtwoord')" />
    
                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />
    
                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    
            {{-- Kloppende employee_id meegeven --}}
                <x-primary-button class="ml-4">
                    {{ __('Registreren') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
