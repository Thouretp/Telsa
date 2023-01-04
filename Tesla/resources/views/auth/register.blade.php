  <link rel="stylesheet" href="{{asset('buildPhone/css/intlTelInput.css')}}">
  <x-guest-layout>
      <x-auth-card>
          <x-slot name="logo">
              <a href="/">
                  <img src="{{asset('Models/teslalogoV2White.png')}}" alt="logo la tes en folie">
              </a>
          </x-slot>

          <form method="POST" action="{{ route('register') }}">
              @csrf

              <!-- Name -->
              <div>
                  <x-input-label for="name" :value="__('Prenom')" />
                  <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <!-- Surname -->
              <div>
                  <x-input-label for="surname" :value="__('Nom de famille')" />
                  <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
                  <x-input-error :messages="$errors->get('surname')" class="mt-2" />
              </div>
              <!-- Email Address -->
              <div class="mt-4">
                  <x-input-label for="email" :value="__('Adresse mail')" />
                  <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <!-- Telephone -->
              <div>
                  <x-input-label for="numerotelephone" :value="__('Numero de telephone')" />
                  <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="numerotelephone" :value="old('numerotelephone')" autofocus />
                  <span id="valid-msg" class="hide">✓ Valid</span>
                  <span id="error-msg" class="hide"></span>
                  <x-input-error :messages="$errors->get('numerotelephone')" class="mt-2" />
              </div>

              <!-- Password -->
              <div class="mt-4">
                  <x-input-label for="password" :value="__('Mot de passe')" />

                  <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

              <!-- Confirm Password -->
              <div class="mt-4">
                  <x-input-label for="password_confirmation" :value="__('Mot de passe de confirmation')" />

                  <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <div class="text-center my-4">
                  <hr class="my-2">
                  <span class="text-center font-bold">Or</span>
                  <div class="w-3/5 mx-auto mt-4">
                      <a href="{{route('google-auth')}}" class="focus:ring-2 focus:ring-indigo-800 focus:ring-offset-4 bg-gray-800 text-white flex items-center rounded">
                          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="28" class="bi bi-google ml-2">
                              <path d="m17.76 12.24a6.12 6.12 90 11-1.56-3.6m2.4 4.44h-6.36" stroke="#FFFFFF" stroke-width="3" fill="none" />
                          </svg>
                          <span class="text-sm text-left ml-4">Continue with Google</span>
                      </a>
                  </div>
              </div>
              <div class="flex items-center justify-end mt-4">
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                      {{ __('Déja inscrit ?') }}
                  </a>

                  <x-primary-button class="ml-4">
                      {{ __('Inscription') }}
                  </x-primary-button>
              </div>
          </form>
          <script src="{{asset('buildPhone/js/intlTelInput.js')}}"></script>
          <script>
              var input = document.querySelector("#phone"),
                  errorMsg = document.querySelector("#error-msg"),
                  validMsg = document.querySelector("#valid-msg");

              // here, the index maps to the error code returned from getValidationError - see readme
              var errorMap = ["Numéro invalide", "Code pays invalide", "Trop court", "Trop long", "Numéro invalide"];

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
                  //    geoIpLookup: function(callback) {
                  //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                  //       var countryCode = (resp && resp.country) ? resp.country : "";
                  //       callback(countryCode);
                  //     });
                  //   },
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
                          input.value = iti.selectedCountryData.dialCode + input.value;
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
      </x-auth-card>
  </x-guest-layout>