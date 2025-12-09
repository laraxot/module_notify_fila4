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
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
declare(strict_types=1);


=======
declare(strict_types=1);


>>>>>>> 4e643df (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 4e643df (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 91f86fa (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
=======
>>>>>>> 177d64d (.)
=======
=======
>>>>>>> 4e643df (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


>>>>>>> f5f1cb1 (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
=======
=======

>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
=======
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 0875292 (.)
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 0875292 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 2e67a2a (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> e13d897 (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> bd22fd4 (.)
=======
>>>>>>> f2a81bf (.)
=======
>>>>>>> 4e643df (.)
=======
declare(strict_types=1);


>>>>>>> 12f2f7e (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 94c68e2 (.)
=======
>>>>>>> b852d6c (.)
=======
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
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