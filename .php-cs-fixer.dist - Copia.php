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
declare(strict_types=1);


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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 518c702 (.)
>>>>>>> 9ed014c (.)
=======
>>>>>>> 3b617e5 (.)
=======
=======
declare(strict_types=1);


>>>>>>> f331fd1 (.)
=======
declare(strict_types=1);


>>>>>>> 0dd5e35 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a7fea39 (.)
=======
>>>>>>> 0dd5e35 (.)
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82c6772 (.)
=======

>>>>>>> 92ecc28 (.)
=======

=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
=======
=======
>>>>>>> 23161eb (.)

>>>>>>> 2fdda20 (.)
>>>>>>> 31bdf6b (.)
=======
=======

>>>>>>> 0db165c (.)
>>>>>>> 7cf73d1 (.)
=======
>>>>>>> 4b81568 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3962ad4 (.)
=======
=======
>>>>>>> a7fea39 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 8d14144 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> d26724f (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f47ea0f (.)
=======
>>>>>>> 7f7061a (.)
=======
>>>>>>> f331fd1 (.)
=======
declare(strict_types=1);


>>>>>>> 4a221df (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 5331e8a (.)
=======
>>>>>>> 217fc69 (.)
=======
declare(strict_types=1);


>>>>>>> 4cb1607 (.)
=======
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
>>>>>>> 5d16a4d (.)
=======
>>>>>>> a7fea39 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> a089e99 (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> fc29e26 (.)
=======
>>>>>>> 6ef086f (.)
=======
>>>>>>> 0dd5e35 (.)
=======
declare(strict_types=1);


>>>>>>> f053e7c (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 7ed1c9e (.)
=======
>>>>>>> 3152eba (.)
=======
=======

>>>>>>> 0db165c (.)
>>>>>>> c3e0fa2 (.)
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