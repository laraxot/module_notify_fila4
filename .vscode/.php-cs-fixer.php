<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
=======
>>>>>>> f813254 (.)
=======
>>>>>>> 954a7fa (.)
=======
>>>>>>> 0b399d7 (.)
=======
>>>>>>> 5dacc15 (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
>>>>>>> 0b399d7 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5dacc15 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
declare(strict_types=1);


>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


>>>>>>> f5f1cb1 (.)
=======
declare(strict_types=1);


>>>>>>> ca9e47f (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 954a7fa (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0b399d7 (.)
=======
declare(strict_types=1);


>>>>>>> 535f451 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5dacc15 (.)
=======
declare(strict_types=1);


>>>>>>> 5f6e153 (.)
=======
>>>>>>> 75c16f6 (.)
=======
declare(strict_types=1);


>>>>>>> c650db4 (.)
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)

$config = new PhpCsFixer\Config();

$config
    ->setRules([
        '@Symfony' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'combine_consecutive_unsets' => true,
        //'binary_operator_spaces' => ['align_double_arrow' => false],
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'php_unit_construct' => false,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
    ])
    ->setFinder($finder)

return $config;