<?php

declare(strict_types=1);

return [
    '@PhpCsFixer' => true,
    '@PhpCsFixer:risky' => true,
    '@PER-CS' => true,
    '@PHP71Migration:risky' => true,
    // Remove: break, case, continue, default, return, throw
    // See: https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/whitespace/blank_line_before_statement.rst#rule-sets
    'blank_line_before_statement' => [
        'statements' => [
            'declare',
            'exit',
            'goto',
            'include',
            'include_once',
            'phpdoc',
            'require',
            'require_once',
            'switch',
            'try',
        ],
    ],
    'cast_spaces' => ['space' => 'none'],
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
    'concat_space' => ['spacing' => 'one'],
    'global_namespace_import' => [
        'import_classes' => true,
        'import_constants' => false,
        'import_functions' => false
    ],
    'increment_style' => ['style' => 'post'],
    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
    'native_constant_invocation' => false,
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
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'phpdoc_align' => ['align' => 'left'],
    'phpdoc_to_comment' => [
        'ignored_tags' => [
            'lang',
            'noinspection',
            'psalm-suppress',
            'see',
            'todo',
            'uses',
            'var',
        ],
    ],
    'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    'php_unit_internal_class' => false,
    'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
    'php_unit_test_class_requires_covers' => false,
    'yoda_style' => [
        'equal' => false,
        'identical' => false,
        'less_and_greater' => null,
    ],
];
