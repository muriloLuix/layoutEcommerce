<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linhas de Linguagem de Validação
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas
    | pela classe validadora. Algumas dessas regras têm várias versões, como
    | as regras de tamanho. Sinta-se à vontade para ajustar essas mensagens.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'accepted_if' => 'O campo :attribute deve ser aceito quando :other é :value.',
    'active_url' => 'O campo :attribute deve ser uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'array' => 'O campo :attribute deve ser um array.',
    'ascii' => 'O campo :attribute deve conter apenas caracteres alfanuméricos de byte único e símbolos.',
    'before' => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
        'file' => 'O campo :attribute deve ter entre :min e :max kilobytes.',
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'string' => 'O campo :attribute deve ter entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do campo :attribute não corresponde.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'unique' => 'O campo :attribute já está em uso.',
    'required' => 'O campo :attribute é obrigatório.',
    'min' => [
        'string' => 'O campo :attribute deve ter no mínimo :min caracteres.',
    ],
    'max' => [
        'string' => 'O campo :attribute não pode ter mais de :max caracteres.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Mensagens Personalizadas de Validação
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar mensagens de validação personalizadas para
    | atributos usando a convenção "attribute.rule" para nomear as linhas.
    | Isso facilita a especificação de uma mensagem personalizada específica.
    |
    */

    'custom' => [
        'usu_email' => [
            'unique' => 'O e-mail já está cadastrado.',
        ],
        'usu_senha' => [
            'min' => 'A senha deve ter no mínimo :min caracteres.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de Validação Personalizados
    |--------------------------------------------------------------------------
    |
    | As linhas a seguir são usadas para trocar nosso placeholder de atributo
    | por algo mais amigável, como "Endereço de E-mail" em vez de "email".
    | Isso nos ajuda a tornar as mensagens mais expressivas.
    |
    */

    'attributes' => [
        'usu_nome' => 'nome',
        'usu_email' => 'e-mail',
        'usu_senha' => 'senha',
        'usu_telefone' => 'telefone',
    ],

];
