<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{asset('Models/teslalogoV2.png')}}" alt="logo la tes en folie">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('address') }}">
            @csrf

            <!-- adresserue -->
            <div>
                <x-input-label for="adresserue" :value="__('Adresse rue')" />
                <x-text-input id="adresserue" class="block mt-1 w-full" type="text" name="adresserue" :value="old('adresserue')" required autofocus />
                <x-input-error :messages="$errors->get('adresserue')" class="mt-2" />
            </div>
            <!-- adresserue2 -->
            <div>
                <x-input-label for="adresserue2" :value="__('Adresse rue 2')" />
                <x-text-input id="adresserue2" class="block mt-1 w-full" type="text" name="adresserue2" :value="old('adresserue2')" required autofocus />
                <x-input-error :messages="$errors->get('adresserue2')" class="mt-2" />
            </div>
            
            <!-- ville -->
            <div>
                <x-input-label for="ville" :value="__('Ville')" />
                <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus />
                <x-input-error :messages="$errors->get('ville')" class="mt-2" />
            </div>

            <!-- cp -->
            <div>
                <x-input-label for="cp" :value="__('cp')" />
                <x-text-input id="cp" class="block mt-1 w-full" type="text" name="cp" :value="old('cp')" required autofocus />
                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
            </div>

            <!-- pays -->
            <div>
                <x-input-label for="pays" :value="__('pays')" />
                <x-text-input id="pays" class="block mt-1 w-full" type="text" name="pays" :value="old('pays')" required autofocus />
                <x-input-error :messages="$errors->get('pays')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Déja inscrit ?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Ajouter l\'adresse') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
