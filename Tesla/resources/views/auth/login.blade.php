<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('Models/teslalogoV2White.png')}}" alt="logo la tes en folie">
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Adresse mail')" />
                <x-text-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 ">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-between mt-4">

                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Créer un compte') }}
                </a>

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
        <div class="text-center my-4">
            <hr class="my-2">
            <span class="text-center font-bold">Or</span>
            <div class="w-3/5 mx-auto mt-4">
                <a href="{{route('google-auth')}}" 
                class="focus:ring-2 focus:ring-indigo-800 focus:ring-offset-4 bg-gray-800 text-white flex items-center rounded">
                   <svg xmlns="http://www.w3.org/2000/svg" width="46" height="28" class="bi bi-google ml-2" > 
                        <path d="m17.76 12.24a6.12 6.12 90 11-1.56-3.6m2.4 4.44h-6.36" stroke="#FFFFFF" stroke-width="3" fill="none"/>
                    </svg>
                    <span class="text-sm text-left ml-4">Continue with Google</span>
                </a>

            </div>

        </div>
    </x-auth-card>
</x-guest-layout>