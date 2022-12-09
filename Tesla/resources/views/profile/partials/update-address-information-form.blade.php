<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Information de L\'adresse') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettez à jour les informations de l'adresse de votre compte.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('adresse.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="adresserue1" :value="__('Adresse rue')" />
            <x-text-input id="adresserue1" name="adresserue1" type="text" class="mt-1 block w-full" :value="old('name', $adresse[0]->adresserue1)" required autofocus autocomplete="adresserue1" />
            <x-input-error class="mt-2" :messages="$errors->get('adresserue1')" />
        </div>
        <div>
            <x-input-label for="adresserue2" :value="__('Adresse rue 2')" />
            <x-text-input id="adresserue2" name="adresserue2" type="text" class="mt-1 block w-full" :value="old('adresserue2', $adresse[0]->adresserue2)" autofocus autocomplete="adresserue2" />
            <x-input-error class="mt-2" :messages="$errors->get('adresserue2')" />
        </div>

        <div>
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" name="ville" type="text" class="mt-1 block w-full" :value="old('ville', $adresse[0]->ville)" autofocus autocomplete="ville" />
            <x-input-error class="mt-2" :messages="$errors->get('ville')" />
        </div>
        <div>
            <x-input-label for="cp" :value="__('cp')" />
            <x-text-input id="cp" name="cp" type="text"  pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" class="mt-1 block w-full" :value="old('cp',  $adresse[0]->cp)" required autofocus autocomplete="cp" />
            <x-input-error class="mt-2" :messages="$errors->get('cp')" />
        </div>

        <div>
            <x-input-label for="pays" :value="__('Pays')" />
            <x-text-input id="pays" name="pays" type="text" class="mt-1 block w-full" :value="old('email',  $adresse[0]->pays)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Votre adresse mail n\'est pas vérifiée.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Cliquez ici pour renvoyer le mail de vérification.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse électronique.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Sauvegardé.') }}</p>
            @endif
        </div>
    </form>
</section>
