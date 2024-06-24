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

    'accepted' => 'Het :attribute veld moet geaccepteerd worden.',
    'accepted_if' => 'Het :attribute veld moet geaccepteerd worden wanneer :other :value is.',
    'active_url' => 'Het :attribute veld moet een geldige URL zijn.',
    'after' => 'Het :attribute veld moet een datum zijn na :date.',
    'after_or_equal' => 'Het :attribute veld moet een datum zijn na of gelijk aan :date.',
    'alpha' => 'Het :attribute veld mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribute veld mag alleen letters, cijfers, streepjes en onderstrepingen bevatten.',
    'alpha_num' => 'Het :attribute veld mag alleen letters en cijfers bevatten.',
    'array' => 'Het :attribute veld moet een array zijn.',
    'ascii' => 'Het :attribute veld mag alleen enkel-byte alfanumerieke tekens en symbolen bevatten.',
    'before' => 'Het :attribute veld moet een datum zijn voor :date.',
    'before_or_equal' => 'Het :attribute veld moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'array' => 'Het :attribute veld moet tussen :min en :max items bevatten.',
        'file' => 'Het :attribute veld moet tussen :min en :max kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet tussen :min en :max zijn.',
        'string' => 'Het :attribute veld moet tussen :min en :max tekens bevatten.',
    ],
    'boolean' => 'Het :attribute veld moet waar of onwaar zijn.',
    'confirmed' => 'De bevestiging van het :attribute veld komt niet overeen.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => 'Het :attribute veld moet een geldige datum zijn.',
    'date_equals' => 'Het :attribute veld moet een datum zijn gelijk aan :date.',
    'date_format' => 'Het :attribute veld moet overeenkomen met het formaat :format.',
    'decimal' => 'Het :attribute veld moet :decimal decimalen bevatten.',
    'declined' => 'Het :attribute veld moet afgewezen worden.',
    'declined_if' => 'Het :attribute veld moet afgewezen worden wanneer :other :value is.',
    'different' => 'Het :attribute veld en :other moeten verschillend zijn.',
    'digits' => 'Het :attribute veld moet :digits cijfers zijn.',
    'digits_between' => 'Het :attribute veld moet tussen :min en :max cijfers zijn.',
    'dimensions' => 'Het :attribute veld heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het :attribute veld heeft een dubbele waarde.',
    'doesnt_end_with' => 'Het :attribute veld mag niet eindigen met een van de volgende: :values.',
    'doesnt_start_with' => 'Het :attribute veld mag niet beginnen met een van de volgende: :values.',
    'email' => 'Het :attribute veld moet een geldig e-mailadres zijn.',
    'ends_with' => 'Het :attribute veld moet eindigen met een van de volgende: :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'file' => 'Het :attribute veld moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde hebben.',
    'gt' => [
        'array' => 'Het :attribute veld moet meer dan :value items bevatten.',
        'file' => 'Het :attribute veld moet groter zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute veld moet groter zijn dan :value.',
        'string' => 'Het :attribute veld moet meer dan :value tekens bevatten.',
    ],
    'gte' => [
        'array' => 'Het :attribute veld moet :value items of meer bevatten.',
        'file' => 'Het :attribute veld moet groter of gelijk aan :value kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet groter of gelijk aan :value zijn.',
        'string' => 'Het :attribute veld moet groter of gelijk aan :value tekens zijn.',
    ],
    'image' => 'Het :attribute veld moet een afbeelding zijn.',
    'in' => 'Het geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld moet bestaan in :other.',
    'integer' => 'Het :attribute veld moet een geheel getal zijn.',
    'ip' => 'Het :attribute veld moet een geldig IP-adres zijn.',
    'ipv4' => 'Het :attribute veld moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het :attribute veld moet een geldig IPv6-adres zijn.',
    'json' => 'Het :attribute veld moet een geldige JSON-string zijn.',
    'lowercase' => 'Het :attribute veld moet kleine letters bevatten.',
    'lt' => [
        'array' => 'Het :attribute veld moet minder dan :value items bevatten.',
        'file' => 'Het :attribute veld moet kleiner zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute veld moet kleiner zijn dan :value.',
        'string' => 'Het :attribute veld moet minder dan :value tekens bevatten.',
    ],
    'lte' => [
        'array' => 'Het :attribute veld mag niet meer dan :value items bevatten.',
        'file' => 'Het :attribute veld moet kleiner of gelijk aan :value kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet kleiner of gelijk aan :value zijn.',
        'string' => 'Het :attribute veld moet kleiner of gelijk aan :value tekens zijn.',
    ],
    'mac_address' => 'Het :attribute veld moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'Het :attribute veld mag niet meer dan :max items bevatten.',
        'file' => 'Het :attribute veld mag niet groter zijn dan :max kilobytes.',
        'numeric' => 'Het :attribute veld mag niet groter zijn dan :max.',
        'string' => 'Het :attribute veld mag niet groter zijn dan :max tekens.',
    ],
    'max_digits' => 'Het :attribute veld mag niet meer dan :max cijfers bevatten.',
    'mimes' => 'Het :attribute veld moet een bestand zijn van het type: :values.',
    'mimetypes' => 'Het :attribute veld moet een bestand zijn van het type: :values.',
    'min' => [
        'array' => 'Het :attribute veld moet minimaal :min items bevatten.',
        'file' => 'Het :attribute veld moet minimaal :min kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet minimaal :min zijn.',
        'string' => 'Het :attribute veld moet minimaal :min tekens bevatten.',
    ],
    'min_digits' => 'Het :attribute veld moet minimaal :min cijfers bevatten.',
    'missing' => 'Het :attribute veld moet ontbreken.',
    'missing_if' => 'Het :attribute veld moet ontbreken wanneer :other :value is.',
    'missing_unless' => 'Het :attribute veld moet ontbreken tenzij :other :value is.',
    'missing_with' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig is.',
    'missing_with_all' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig zijn.',
    'multiple_of' => 'Het :attribute veld moet een veelvoud van :value zijn.',
    'not_in' => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het :attribute veld formaat is ongeldig.',
    'numeric' => 'Het :attribute veld moet een nummer zijn.',
    'password' => [
        'letters' => 'Het :attribute veld moet ten minste één letter bevatten.',
        'mixed' => 'Het :attribute veld moet ten minste één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het :attribute veld moet ten minste één cijfer bevatten.',
        'symbols' => 'Het :attribute veld moet ten minste één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is in een datalek verschenen. Kies een ander :attribute.',
    ],
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'prohibited' => 'Het :attribute veld is verboden.',
    'prohibited_if' => 'Het :attribute veld is verboden wanneer :other :value is.',
    'prohibited_unless' => 'Het :attribute veld is verboden tenzij :other in :values is.',
    'prohibits' => 'Het :attribute veld verbiedt :other aanwezig te zijn.',
    'regex' => 'Het :attribute veld formaat is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet vermeldingen bevatten voor: :values.',
    'required_if' => 'Het :attribute veld is verplicht wanneer :other :value is.',
    'required_if_accepted' => 'Het :attribute veld is verplicht wanneer :other geaccepteerd is.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values is.',
    'required_with' => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => 'Het :attribute veld en :other moeten overeenkomen.',
    'size' => [
        'array' => 'Het :attribute veld moet :size items bevatten.',
        'file' => 'Het :attribute veld moet :size kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet :size zijn.',
        'string' => 'Het :attribute veld moet :size tekens bevatten.',
    ],
    'starts_with' => 'Het :attribute veld moet beginnen met een van de volgende: :values.',
    'string' => 'Het :attribute veld moet een string zijn.',
    'timezone' => 'Het :attribute veld moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'uppercase' => 'Het :attribute veld moet hoofdletters bevatten.',
    'url' => 'Het :attribute veld moet een geldige URL zijn.',
    'ulid' => 'Het :attribute veld moet een geldige ULID zijn.',
    'uuid' => 'Het :attribute veld moet een geldige UUID zijn.',


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
        'functionTitle' => [
            'required' => 'Veld functie titel hoort ingevuld te zijn.',
        ],
        'finalAssessment' => [
            'required' => 'Veld eindbeoordeling hoort ingevuld te zijn.',
        ],
        'internshipStartedAt' => [
            'required' => 'Veld stage begon op hoort ingevuld te zijn.',
            'date' => 'Veld stage begon op moet een datum zijn.',
        ],
        'internshipEndedAt' => [   
            'required' => 'Veld stage eindigde op hoort ingevuld te zijn.',
            'date' => 'Veld stage eindigde op moet een datum zijn.',
            'after_or_equal' => 'Datum moet later dan zijn de datum bij stage begon op.',
        ],
        'companyName' => [
            'required' => 'Veld bedrijfnaam hoort ingevuld te zijn.',
        ],
        'jobTitle' => [
            'required' => 'Veld baan titel hoort ingevuld te zijn.'
        ],
        'smallExplanation1' => [
            'required' => 'Veld kleine uitleg hoort ingevuld te zijn.'
        ],
        'yearsWorked' => [
            'required' => 'Veld aantal jaren gewerkt hoort ingevuld te zijn.'
        ],
        'companyLocation' => [
            'required' => 'Veld locatie hoort ingevuld te zijn.'
        ],
        'schoolName' => [
            'required' => 'Veld school hoort ingevuld te zijn.'
        ],
        'educationName' => [
            'required' => 'Veld naam van opleiding hoort ingevuld te zijn.'
        ],
        'yearsFollowed' => [
            'required' => 'Veld duur van opleiding hoort ingevuld te zijn.'
        ],
        'status' => [
            'required' => 'Veld status hoort ingevuld te zijn.'
        ],
        'schoolLocation' => [
            'required' => 'Veld locatie hoort ingevuld te zijn.'
        ],
        'educatorName' => [
            'required' => 'Veld naam van opleider hoort ingevuld te zijn.'
        ],
        'courseName' => [
            'required' => 'Veld naam van cursus hoort ingevuld te zijn.'
        ],
        'validityEarned' => [
            'required' => 'Veld geldig sinds hoort ingevuld te zijn.'
        ],
        'validUntil' => [
            'required' => 'Veld geldig tot hoort ingevuld te zijn.'
        ],
        'certificationLocation' => [
            'required' => 'Veld locatie hoort ingevuld te zijn.'
        ],
        'name' => [
            'required' => 'Veld naam hoort ingevuld te zijn.',
            'min' => 'Veld moet minimaal 3 tekens lang zijn.'
        ],
        'email' => [
            'required' => 'Veld email hoort ingevuld te zijn.',
            'email' => 'Veld email moet een geldig email adres bevatten.',
            'unique' => 'Email adres is al bezet'
        ],
        'password' => [
            'required' => 'Veld (bevestig) wachtwoord hoort ingevuld te zijn.',
            'confirmed' => 'Veld bevestig wachtwoord komt niet overeen met veld wachtwoord.',
            'min' => 'Veld moet minimaal 6 tekens lang zijn.'
        ]
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
