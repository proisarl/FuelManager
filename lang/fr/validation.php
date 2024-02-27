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

    'accepted' => "ce champ doit être accepté.",  
    'accepted_if' => "ce champ doit être accepté quand :other est :value.",  
    'active_url' => "ce champ n'est pas une URL valide.",  
    'after' => "ce champ doit être une date après :date.",  
    'after_or_equal' => "ce champ doit être une date après ou égaler à :date.",  
    'alpha' => "ce champ doit contenir seulement lettres.",  
    'alpha_dash' => "ce champ doit contenir seulement lettres, nombres, tirets et soulignements.",  
    'alpha_num' => "ce champ doit contenir seulement lettres et nombres.",  
    'array' => "ce champ doit être une collection.",  
    'before' => "ce champ doit être une date auparavant :date.",  
    'before_or_equal' => "ce champ doit être une date auparavant ou égaler à :date.",  
    'between' => [  
        'array' => "ce champ doit avoir entre :min et :max articles.",  
        'file' => "ce champ doit être entre :min et :max kilo-octets.",  
        'numeric' => "ce champ doit être entre :min et :max.",  
        'string' => "ce champ doit être entre :min et :max caractères.",  
    ],  
    'boolean' => "ce champ doit être vrai ou faux.",  
    'confirmed' => "Le champs de confirmation n'égale pas.",  
    'current_password' => "Le mot de passe est inexact.",  
    'date' => "ce champ n'est pas une date valide.",  
    'date_equals' => "ce champ doit être un égal de la date à :date.",  
    'date_format' => "ce champ n'égale pas le format :format.",  
    'declined' => "ce champ doit être décliné.",  
    'declined_if' => "ce champ doit être décliné quand :other est :value.",  
    'different' => "ce champ et :other doit être différent.",  
    'digits' => "ce champ doit être :digits chiffres.",  
    'digits_between' => "ce champ doit être entre :min et :max chiffres.",  
    'dimensions' => "ce champ a des dimensions de l'image invalides.",  
    'distinct' => "ce champ a une valeur en double.",  
    'email' => "ce champ doit être une adresse de courrier électronique valide.",  
    'ends_with' => "ce champ doit terminer avec un du suivre :values.",  
    'enum' => "Les attributs sélectionnés est invalide.",  
    'exists' => "Les attributs sélectionnés est invalide.",  
    'file' => "ce champ doit être un dossier.",  
    'filled' => "ce champ doit avoir une valeur.",  
    'gt' => [  
        'array' => "ce champ doit avoir plus que :value articles.",  
        'file' => "ce champ doit être plus grand que :value kilo-octets",  
        'numeric' => "ce champ doit être plus grand que :value.",  
        'string' => "ce champ doit être plus grand que :value caractères.",  
    ],  
    'gte' => [  
        'array' => "ce champ doit avoir :value articles ou plus.",  
        'file' => "ce champ doit être plus grand ou égale à :value kilo-octets.",  
        'numeric' => "ce champ doit être plus grand ou égale à :value.",  
        'string' => "ce champ doit être plus grand ou égale à :value caractères.",  
    ],  
    'image' => "ce champ doit être une image.",  
    'in' => "Les champ sélectionné est invalide.",  
    'in_array' => "ce champ n'existe pas dans :other.",  
    'integer' => "ce champ doit être un nombre entier.",  
    'ip' => "ce champ doit être une adresse IP valide.",  
    'ipv4' => "ce champ doit être un IPv4 valide adresse.",  
    'ipv6' => "ce champ doit être un IPv6 valide adresse.",  
    'json' => "ce champ doit être un JSON valide corde.",  
    'lt' => [  
        'array' => "ce champ doit avoir moins que :value articles.",  
        'file' => "ce champ doit être moins que :value kilo-octets.",  
        'numeric' => "ce champ doit être moins que :value.",  
        'string' => "ce champ doit être moins que :value caractères.",  
    ],  
    'lte' => [  
        'array' => "ce champ ne doit pas avoir plus que :value articles.",  
        'file' => "ce champ doit être moins ou égale à :value kilo-octets.",  
        'numeric' => "ce champ doit être moins ou égale à :value.",  
        'string' => "ce champ doit être moins ou égale à :value caractères.",  
    ],  
    'mac_address' => "ce champ doit être une adresse MAC valide.",  
    'max' => [  
        'array' => "ce champ ne doit pas avoir plus que :max articles.",  
        'file' => "ce champ ne doit pas être plus grand que :max kilo-octets.",  
        'numeric' => "ce champ ne doit pas être plus grand que :max.",  
        'string' => "ce champ ne doit pas être plus grand que :max caractères.",  
    ],  
    'mimes' => "ce champ doit être un dossier de type :values.",  
    'mimetypes' => "ce champ doit être un dossier de type :values.",  
    'min' => [  
        'array' => "ce champ doit avoir au moins :min articles.",  
        'file' => "ce champ doit être au moins :min kilo-octets.",  
        'numeric' => "ce champ doit être au moins :min.",  
        'string' => "ce champ doit être au moins :min caractères.",  
    ],  
    'multiple_of' => "ce champ doit être un multiple de :value.",  
    'not_in' => "Le sélectionné est invalide.",  
    'not_regex' => "le format est invalide.",  
    'numeric' => "ce champ doit être un nombre.",  
    'password' => "Le mot de passe est inexact.",  
    'present' => "ce champ doit être présent.",  
    'prohibited' => "ce champ est interdit.",  
    'prohibited_if' => "ce champ est interdit quand :other est :value.",  
    'prohibited_unless' => "ce champ est interdit à moins que :other est dans :values.",  
    'prohibits' => "ce champ interdit :other d'être présent.",  
    'regex' => "le format est invalide.",  
    'required' => "ce champ est exigé.",  
    'required_array_keys' => "ce champ doit contenir des entrées pour :values.",  
    'required_if' => "ce champ est exigé quand :other est :value.",  
    'required_unless' => "ce champ est exigé à moins que :other est dans :values.",  
    'required_with' => "ce champ est exigé quand :values sont présentes.",  
    'required_with_all' => "ce champ est exigé quand :values sont présentes.",  
    'required_without' => "ce champ est exigé quand :values ne sont pas présentes.",  
    'required_without_all' => "ce champ est exigé quand aucun de :values sont présentes.",  
    'same' => "ce champ et :other doivent s'égaler.",  
    'size' => [  
        'array' => "ce champ doit contenir :size articlesn.",  
        'file' => "ce champ doit être :size kilo-octetsn.",  
        'numeric' => "ce champ doit être :size.",  
        'string' => "ce champ doit être :size caractèresn.",  
    ],  
    'starts_with' => "ce champ doit commencer avec un du suivre :values.",  
    'string' => "ce champ doit être une ficelle.",  
    'timezone' => "ce champ doit être un timezone valide.",  
    'unique' => "ce champ a déjà été pris.",  
    'uploaded' => "ce champ a manqué de télécharger.",  
    'url' => "ce champ doit être une URL valide.",  
    'uuid' => "ce champ doit être un UUID valide.",

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
