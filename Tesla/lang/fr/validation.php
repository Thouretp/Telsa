<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Ce champ doit être accepté.',
    'accepted_if' => 'Ce champ doit être accepté lorsque :other est :value.',
    'active_url' => 'Ce champ n\'est pas une URL valide.',
    'after' => 'Vous devez entrez une date après :date.',
    'after_or_equal' => 'Ce champ doit être une date postérieure ou égale à :date.',
    'alpha' => 'Ce champ ne doit contenir que des lettres.',
    'alpha_dash' => 'Ce champ ne doit contenir que des lettres, des chiffres, des tirets et des caractères de soulignement.',
    'alpha_num' => 'Ce champ ne doit contenir que des lettres et des chiffres.',
    'array' => 'Ce champ doit être un tableau',
    'before' => 'Vous devez entrez une date avant :date.',
    'before_or_equal' => 'Ce champ doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Ce champ doit comporter des éléments compris entre :min et :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'Ce champ doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Ce champ n\'est pas une date valide.',
    'date_equals' => 'Ce champ doit être une date égale à :date.',
    'date_format' => 'Ce champ ne correspond pas au format :format.',
    'declined' => 'Ce champ doit être décliné.',
    'declined_if' => 'Ce champ doit être décliné lorsque :other est :value.',
    'different' => 'Ce champ et :other doivent être différents.',
    'digits' => 'Ce champ doit être :digits digits.',
    'digits_between' => 'L\'attribut doit être compris entre les chiffres :min et :max.',
    'dimensions' => 'L\'attribut a des dimensions d\'image non valides.',
    'distinct' => 'Ce champ a une valeur en double.',
    'doesnt_end_with' => 'Ce champ ne peut pas se terminer par l\'un des éléments suivants : :valeurs.',
    'doesnt_start_with' => 'Ce champ ne peut pas commencer par l\'un des éléments suivants : :valeurs.',
    'email' => 'Ce champ doit être une adresse électronique valide.',
    'ends_with' => 'Ce champ doit se terminer par l\'un des éléments suivants : :valeurs.',
    'enum' => 'Le champ :sélectionné n\'est pas valide.',
    'exists' => 'Le champ :sélectionné n\'est pas valide.',
    'file' => 'L\'attribut :doit être un fichier.',
    'filled' => 'Ce champ doit avoir une valeur.',
    'gt' => [
        'array' => 'Ce champ doit comporter plus d\'éléments que :value.',
        'file' => 'Ce champ doit être supérieur à :value kilobytes.',
        'numeric' => 'Ce champ doit être supérieur à :value.',
        'string' => 'Ce champ doit être supérieur aux caractères :value.',
    ],
    'gte' => [
        'array' => 'Ce champ doit avoir des éléments :value ou plus.',
        'file' => 'Ce champ doit être supérieur ou égal à :value kilobytes.',
        'numeric' => 'Ce champ doit être supérieur ou égal à :value.',
        'string' => 'Ce champ doit être supérieur ou égal aux caractères :value.',
    ],
    'image' => 'Ce champ doit être une image.',
    'in' => 'Le champ sélectionné n\'est pas valide',
    'in_array' => 'Le champ sélectionné n\'existe pas dans :other.',
    'integer' => 'Ce champ doit être un nombre entier.',
    'ip' => 'Ce champ doit être une adresse IP valide.',
    'ipv4' => 'Ce champ doit être une adresse IPv4 valide.',
    'ipv6' => 'Ce champ doit être une adresse IPv6 valide. ',
    'json' => 'Ce champ doit être une chaîne JSON valide.',
    'lowercase' => 'Ce champ doit être en minuscules.',
    'lt' => [
        'array' => 'Ce champ doit avoir moins d\'éléments que :value.',
        'file' => 'Ce champ doit être inférieur à :valeur kilooctets.',
        'numeric' => 'Ce champ doit être inférieur à :value.',
        'string' => 'Ce champ doit comporter moins de caractères que :valeur.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'L\'attribut doit comporter au moins :min éléments.',
        'file' => 'L\'attribut doit être d\'au moins :min kilo-octets.',
        'numeric' => 'L\'attribut doit être au moins :min.',
        'string' => 'L\'attribut doit comporter au moins :min caractères.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'Ce champ doit contenir au moins une lettre.',
        'mixed' => 'Ce champ doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Ce champ doit contenir au moins un chiffre.',
        'symbols' => 'Ce champ doit contenir au moins un symbole.',
        'uncompromised' => 'le mot de passe donné est apparu dans une fuite de données. Veuillez choisir un autre mot de passe',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'Ce champ doit contenir des éléments :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'Ce champ doit être une chaîne de caractères.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'Ce champ a déjà été pris.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'Ce champ doit être en majuscules.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
