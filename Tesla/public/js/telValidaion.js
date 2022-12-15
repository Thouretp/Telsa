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
                    input.value = iti.selectedCountryData.dialCode + " " + input.value;
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        console.log(iti.selectedCountryData.dialCode);
        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);