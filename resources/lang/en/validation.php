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

    'accepted'             => 'El campo :attribute debe ser acceptado.',
    'active_url'           => 'El campo :attribute no es una URL valid.',
    'after'                => 'El campo :attribute debe ser una fecha despues que :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha despues o igual que :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números, guion y guion bajo.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file'    => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser true o false.',
    'confirmed'            => 'El campo confirmar :attribute no coincide.',
    'date'                 => 'El campo :attribute no es una fecha valida.',
    'date_format'          => 'El campo :attribute no coincide con el formato :format.',
    'different'            => 'El campo :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute deben contener :digits digitos.',
    'digits_between'       => 'El campo :attribute debe estar entre :min y :max.',
    'dimensions'           => 'El campo :attribute tiene dimensiones invalidas.',
    'distinct'             => 'El campo :attribute tiene valores duplicados.',
    'email'                => 'El campo :attribute debe contener un email valido.',
    'exists'               => 'El :attribute selected es invalido.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file'    => 'El tamaño del :attribute debe superar los :value kilobytes.',
        'string'  => 'El :attribute debe tener :value caracteres.',
        'array'   => 'El :attribute debe contener mas de :value items.',
    ],
    'gte'                  => [
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'file'    => 'El campo :attribute debe ser mayor o igual a :value kilobytes.',
        'string'  => 'El campo :attribute debe ser mayor o igual a :value caracteres.',
        'array'   => 'El campo :attribute debe tener :value items o mas.',
    ],
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es invalido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe contener una cadena JSON valida.',
    'lt'                   => [
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'file'    => 'El campo :attribute debe ser menor que :value kilobytes.',
        'string'  => 'El campo :attribute debe ser menor que :value caracteres.',
        'array'   => 'El campo :attribute debe contener items menor a :value.',
    ],
    'lte'                  => [
        'numeric' => 'El campo :attribute debe ser menor o igual que :value.',
        'file'    => 'El campo :attribute debe ser menor o igual que:value kilobytes.',
        'string'  => 'El campo :attribute debe ser menor o igual que :value caracteres.',
        'array'   => 'El campo :attribute no debe tener mas items que :value.',
    ],
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',
        'file'    => 'El campo :attribute no debe ser mayor que :max kilobytes.',
        'string'  => 'El campo :attribute no debe ser mayor que :max caracteres.',
        'array'   => 'El campo :attribute no debe contener mas que :max items.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser como minimo :min.',
        'file'    => 'El campo :attribute debe ser como minimo :min kilobytes.',
        'string'  => 'El campo :attribute debe ser como minimo :min caracteres.',
        'array'   => 'El campo :attribute debe tener como minimo :min items.',
    ],
    'not_in'               => 'El :attribute seleccionado es invalido.',
    'not_regex'            => 'El formato de :attribute es invalido.',
    'numeric'              => 'El :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe ser presente.',
    'regex'                => 'El formato de :attribute es invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other es un :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values estan presentes.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando :values no están presentes.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size characters.',
        'array'   => 'El campo :attribute debe contener :size items.',
    ],
    'string'               => 'El campo :attribute debe ser una cadena.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria valida.',
    'unique'               => 'El :attribute ya esta registrado.',
    'uploaded'             => 'El campo :attribute falló al cargar.',
    'url'                  => 'El formato :attribute es invalido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
