<?php

declare(strict_types=1);

return [
    '@PhpCsFixer' => true,
    '@PhpCsFixer:risky' => true,
    '@PSR1' => true,
    '@PSR2' => true,
    '@PSR12' => true,
    '@PHP71Migration:risky' => true,
    'cast_spaces' => ['space' => 'none'],
    'concat_space' => ['spacing' => 'one'],
    'native_function_invocation' => ['include' => []],
    'ordered_class_elements' => [
        'sort_algorithm' => 'alpha',
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public_static',
            'property_protected_static',
            'property_private_static',
            'property_public',
            'property_protected',
            'property_private',
            'method_public_abstract_static',
            'method_protected_abstract_static',
            'method_public_abstract',
            'method_protected_abstract',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public_static',
            'method_protected_static',
            'method_private_static',
            'method_public',
            'method_protected',
            'method_private',
        ],
    ],
    'phpdoc_align' => ['align' => 'left'],
    'phpdoc_to_comment' => [
        'ignored_tags' => [
            'todo',
            'uses',
            'var',
        ],
    ],
    'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    'yoda_style' => [
        'equal' => false,
        'identical' => false,
        'less_and_greater' => null,
    ],
];
