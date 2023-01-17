<link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
<title>Lates : Récupération du mot de passe</title>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('Models/teslalogoV2White.png')}}" alt="Logo Lates" title="Accueil">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Vous avez oublié votre mot de passe ? Aucun problème. Indiquez-nous simplement votre adresse électronique et nous vous enverrons un lien de réinitialisation du mot de passe qui vous permettra de choisir un nouveau mot de passe.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Adresse mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Réinitialisation du mot de passe') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
