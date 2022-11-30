<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('Models/teslalogoV2.png')}}" alt="logo la tes en folie">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Vous êtes dans une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirmation du mot de passe') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
