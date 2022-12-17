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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other é :value.',
    'active_url' => 'O :attribute não é a valid URL.',
    'after' => 'O :attribute deve ser a date after :date.',
    'after_or_equal' => 'O :attribute deve ser a date after or equal to :date.',
    'alpha' => 'O :attribute deve only contain letters.',
    'alpha_dash' => 'O :attribute deve only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'O :attribute deve only contain letters and numbers.',
    'array' => 'O :attribute deve ser an array.',
    'before' => 'O :attribute deve ser a date before :date.',
    'before_or_equal' => 'O :attribute deve ser a date before or equal to :date.',
    'between' => [
        'array' => 'O :attribute deve have between :min and :max items.',
        'file' => 'O :attribute deve ser between :min and :max kilobytes.',
        'numeric' => 'O :attribute deve ser between :min and :max.',
        'string' => 'O :attribute deve ser between :min and :max characters.',
    ],
    'boolean' => 'O :attribute field deve ser true or false.',
    'confirmed' => 'O :attribute confirmation does not match.',
    'current_password' => 'A senha está errada.',
    'date' => 'O :attribute não é a valid date.',
    'date_equals' => 'O :attribute deve ser a date equal to :date.',
    'date_format' => 'O :attribute does not match the format :format.',
    'declined' => 'O :attribute deve ser declined.',
    'declined_if' => 'O :attribute deve ser declined quando :other é :value.',
    'different' => 'O :attribute and :other deve ser different.',
    'digits' => 'O :attribute deve ser :digits digits.',
    'digits_between' => 'O :attribute deve ser between :min and :max digits.',
    'dimensions' => 'O :attribute has invalid image dimensions.',
    'distinct' => 'O :attribute field has a duplicate value.',
    'doesnt_end_with' => 'O :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'O :attribute may not start with one of the following: :values.',
    'email' => 'O :attribute deve ser a valid email address.',
    'ends_with' => 'O :attribute deve end with one of the following: :values.',
    'enum' => 'O selected :attribute is invalid.',
    'exists' => 'O selected :attribute is invalid.',
    'file' => 'O :attribute deve ser a file.',
    'filled' => 'O :attribute field deve have a value.',
    'gt' => [
        'array' => 'O :attribute deve have more than :value items.',
        'file' => 'O :attribute deve ser greater than :value kilobytes.',
        'numeric' => 'O :attribute deve ser greater than :value.',
        'string' => 'O :attribute deve ser greater than :value characters.',
    ],
    'gte' => [
        'array' => 'O :attribute deve have :value items or more.',
        'file' => 'O :attribute deve ser greater than or equal to :value kilobytes.',
        'numeric' => 'O :attribute deve ser greater than or equal to :value.',
        'string' => 'O :attribute deve ser greater than or equal to :value characters.',
    ],
    'image' => 'O :attribute deve ser an image.',
    'in' => 'O selected :attribute is invalid.',
    'in_array' => 'O :attribute field does not exist in :other.',
    'integer' => 'O :attribute deve ser an integer.',
    'ip' => 'O :attribute deve ser a valid IP address.',
    'ipv4' => 'O :attribute deve ser a valid IPv4 address.',
    'ipv6' => 'O :attribute deve ser a valid IPv6 address.',
    'json' => 'O :attribute deve ser a valid JSON string.',
    'lt' => [
        'array' => 'O :attribute deve have less than :value items.',
        'file' => 'O :attribute deve ser less than :value kilobytes.',
        'numeric' => 'O :attribute deve ser less than :value.',
        'string' => 'O :attribute deve ser less than :value characters.',
    ],
    'lte' => [
        'array' => 'O :attribute deve not have more than :value items.',
        'file' => 'O :attribute deve ser less than or equal to :value kilobytes.',
        'numeric' => 'O :attribute deve ser less than or equal to :value.',
        'string' => 'O :attribute deve ser less than or equal to :value characters.',
    ],
    'mac_address' => 'O :attribute deve ser a valid MAC address.',
    'max' => [
        'array' => 'O :attribute deve not have more than :max items.',
        'file' => 'O :attribute deve not ser greater than :max kilobytes.',
        'numeric' => 'O :attribute deve not ser greater than :max.',
        'string' => 'O :attribute deve not ser greater than :max characters.',
    ],
    'max_digits' => 'O :attribute deve not have more than :max digits.',
    'mimes' => 'O :attribute deve ser a file of type: :values.',
    'mimetypes' => 'O :attribute deve ser a file of type: :values.',
    'min' => [
        'array' => 'O :attribute deve have at least :min items.',
        'file' => 'O :attribute deve ser at least :min kilobytes.',
        'numeric' => 'O :attribute deve ser at least :min.',
        'string' => 'O :attribute deve ser at least :min characters.',
    ],
    'min_digits' => 'O :attribute deve have at least :min digits.',
    'multiple_of' => 'O :attribute deve ser a multiple of :value.',
    'not_in' => 'O selected :attribute is invalid.',
    'not_regex' => 'O :attribute format is invalid.',
    'numeric' => 'O :attribute deve ser a number.',
    'password' => [
        'letters' => 'O :attribute deve contain at least one letter.',
        'mixed' => 'O :attribute deve contain at least one uppercase and one lowercase letter.',
        'numbers' => 'O :attribute deve contain at least one number.',
        'symbols' => 'O :attribute deve contain at least one symbol.',
        'uncompromised' => 'O given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'O :attribute field deve ser present.',
    'prohibited' => 'O :attribute field is prohibited.',
    'prohibited_if' => 'O :attribute field is prohibited quando :other is :value.',
    'prohibited_unless' => 'O :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'O :attribute field prohibits :other from being present.',
    'regex' => 'O :attribute format is invalid.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O :attribute field deve contain entries for: :values.',
    'required_if' => 'O :attribute field is obrigatório quando :other is :value.',
    'required_if_accepted' => 'O :attribute field is obrigatório quando :other is aceito.',
    'required_unless' => 'O :attribute field is obrigatório unless :other is in :values.',
    'required_with' => 'O :attribute field is obrigatório quando :values is present.',
    'required_with_all' => 'O :attribute field is obrigatório quando :values are present.',
    'required_without' => 'O :attribute field is obrigatório quando :values is not present.',
    'required_without_all' => 'O :attribute field is obrigatório when none of :values are present.',
    'same' => 'O :attribute and :other deve match.',
    'size' => [
        'array' => 'O :attribute deve contain :size items.',
        'file' => 'O :attribute deve ser :size kilobytes.',
        'numeric' => 'O :attribute deve ser :size.',
        'string' => 'O :attribute deve ser :size characters.',
    ],
    'starts_with' => 'O :attribute deve start with one of the following: :values.',
    'string' => 'O :attribute deve ser a string.',
    'timezone' => 'O :attribute deve ser a valid timezone.',
    'unique' => 'O :attribute has already been taken.',
    'uploaded' => 'O :attribute failed to upload.',
    'url' => 'O :attribute deve ser a valid URL.',
    'uuid' => 'O :attribute deve ser a valid UUID.',

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

    'attributes' => [
        'title' => 'título',
        'content' => 'conteúdo',
    ],

];
