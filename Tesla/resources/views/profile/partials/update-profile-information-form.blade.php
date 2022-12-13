<link rel="stylesheet" href="{{asset('buildPhone/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{asset('buildPhone/css/demo.css')}}">
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Information du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettez à jour les informations du profil et le mail de votre compte.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="surname" :value="__('Prenom')" />
            <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $user->surname)" required autofocus autocomplete="surname" />
            <x-input-error class="mt-2" :messages="$errors->get('surname')" />
        </div>

        <div>
            <x-input-label for="secondprenom" :value="__('Deuxieme prenom')" />
            <x-text-input id="secondprenom" name="secondprenom" type="text" class="mt-1 block w-full" :value="old('secondprenom', $user->secondprenom)" required autofocus autocomplete="secondprenom" />
            <x-input-error class="mt-2" :messages="$errors->get('secondprenom')" />
        </div>
        <div>
            <x-input-label for="numerotelephone" :value="__('Numero de Telephone')" />
            <x-text-input id="phone" name="numerotelephone" type="tel" class="mt-1 block w-full" :value="old('numerotelephone', $user->numerotelephone)" required autofocus autocomplete="numerotelephone" />
            <span id="valid-msg" class="hide">✓ Valid</span>
            <span id="error-msg" class="hide"></span>
            
            <x-input-error class="mt-2" :messages="$errors->get('numerotelephone')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Adresse mail')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
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
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Sauvegardé.') }}</p>
            @endif
        </div>
    </form>
</section>
<script src="{{asset('buildPhone/js/intlTelInput.js')}}"></script>
<script>
    var input = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    var iti = window.intlTelInput(input, {
        utilsScript: "{{asset('buildPhone/js/utils.js')}}",
        // allowExtension: true,
        formatOnDisplay: true,
        // allowDropdown: false,
        autoHideDialCode: true,
        // autoPlaceholder: true,
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        //geoIpLookup: function(callback) {
        //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //         var countryCode = (resp && resp.country) ? resp.country : "";
        //         callback(countryCode);
        //     });
        // },
        //hiddenInput: "full_number",
        initialCountry: "FR",
        // localizedCountries: { 'de': 'Deutschland' },
        nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //placeholderNumberType: "MOBILE",
        preferredCountries: ['FR', 'GB', 'US'],
        separateDialCode: true,
    });

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
</script>