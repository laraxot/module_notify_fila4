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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
declare(strict_types=1);


=======
>>>>>>> 82ae73be (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
>>>>>>> c8eedbb (.)
=======
>>>>>>> c8eedbbb (.)
=======
>>>>>>> 56ae9932 (.)
declare(strict_types=1);


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
=======
<<<<<<< HEAD
=======
>>>>>>> 9d67cabd (.)
declare(strict_types=1);


=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

=======
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
declare(strict_types=1);


declare(strict_types=1);


declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD

declare(strict_types=1);


=======
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 9d67cabd (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
=======
>>>>>>> c8eedbb (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
=======
>>>>>>> 1fd232c (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> c8eedbbb (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
=======

>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======

>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 56ae9932 (.)
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


>>>>>>> 2941b0bd (.)
=======

>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
=======

>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
declare(strict_types=1);


>>>>>>> 96d3f6d2 (.)
=======
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
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