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

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve ser um dado posterior à :date.',
    'after_or_equal' => 'O campo :attribute deve ser um dado posterior ou igual à :date.',
    'alpha' => 'O campo :attribute deve conter somente letras.',
    'alpha_dash' => 'O campo :attribute deve conter somente letras, números, pontos e virgulas.',
    'alpha_num' => 'O campo :attribute deve conter somente letras e números.',
    'array' => 'O campo :attribute deve ser um array.',
    'before' => 'O campo :attribute deve ser uma data anterior à :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual à :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file' => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve conter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo de confirmação :attribute está incorreto.',
    'date' => 'O campo :attribute não é uma date válida.',
    'date_equals' => 'O campo :attribute deve ser uma data igual à :date.',
    'date_format' => 'O campo :attribute está com formato diferente de :format.',
    'different' => 'O campo :attribute and :other devem ser diferente.',
    'digits' => 'O campo :attribute deve conter :digits digitos.',
    'digits_between' => 'O campo :attribute deve conter entre :min e :max digitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => 'O campo :attribute deve ser um email válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes valores: :values.',
    'exists' => 'O atributo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ser preenchido.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que :value caracteres.',
        'array' => 'O campo :attribute deve conter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior que ou igual à :value.',
        'file' => 'O campo :attribute deve ser maior que ou igual à :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que ou igual à :value caracteres.',
        'array' => 'O campo :attribute deve conter :value ou mais itens.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O atributo :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não está em :other.',
    'integer' => 'O campo :attribute deve ser um inteiro.',
    'ip' => 'O campo :attribute deve ser um IP válido.',
    'ipv4' => 'O campo :attribute deve ser um IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um IPv6 válido.',
    'json' => 'O campo :attribute deve ser um JSON válido.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor que :value caracteres.',
        'array' => 'O campo :attribute deve conter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual à :value.',
        'file' => 'O campo :attribute deve ser menor ou igual à :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor ou igual à :value caracteres.',
        'array' => 'O campo :attribute não deve conter mais de :value itens.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'file' => 'O campo :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O campo :attribute não deve ser maior que :max caracteres.',
        'array' => 'O campo :attribute não deve conter mais de :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo de tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo de tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file' => 'O campo :attribute deve ser no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve ser no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve conter no mínimo :min itens.',
    ],
    'multiple_of' => 'O campo :attribute deve ser um multiplo de :value',
    'not_in' => 'O atributo :attribute selecionado é invalido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve ser presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório à menos que :other está em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos valores: :values estão presentes.',
    'same' => 'O campo :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file' => 'O campo :attribute deve ser :size kilobytes.',
        'string' => 'O campo :attribute deve ser :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser um texto.',
    'timezone' => 'O campo :attribute deve ser uma zona válida.',
    'unique' => 'O campo :attribute já foi pego.',
    'uploaded' => 'O campo :attribute falhou para fazer o upload.',
    'url' => 'O formato do campo :attribute é inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

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
