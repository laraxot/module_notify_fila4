<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

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
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
use RuntimeException;
use ReflectionClass;
use ReflectionException;
=======
<<<<<<< HEAD
use RuntimeException;
use ReflectionClass;
use ReflectionException;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use RuntimeException;
use ReflectionClass;
use ReflectionException;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionException;
use RuntimeException;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
use RuntimeException;
use ReflectionClass;
use ReflectionException;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
use RuntimeException;
use ReflectionClass;
use ReflectionException;
=======
<<<<<<< HEAD
use RuntimeException;
use ReflectionClass;
use ReflectionException;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)

/**
 * Classe per l'invio di SMS.
 */
class SmsService
{
    // ---------CSS------------
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
    public ?string $to = null;
=======
    public null|string $to = null;
>>>>>>> b93ef594b4 (.)

    public null|string $from = null;

<<<<<<< HEAD
    public ?string $body = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $body = null;
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
    public ?string $to = null;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public null|string $to = null;
>>>>>>> f813254 (.)

    public ?string $from = null;

    public ?string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======

<<<<<<< HEAD
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
<<<<<<< HEAD
=======
    public null|string $body = null;
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
    public ?string $to = null;
=======
    public null|string $to = null;
>>>>>>> b93ef594b4 (.)

    public null|string $from = null;

<<<<<<< HEAD
    public ?string $body = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $body = null;
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
    /**
     * Variabili per il template SMS.
     *
     * @var array<string, mixed>
     */
    public array $vars = [];

    /**
     * Driver per l'invio degli SMS.
     */
    public string $driver = 'netfun';

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> b19cd40 (.)
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
    private static null|self $instance = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b3 (.)
=======
    private static null|self $instance = null;
=======
=======
    private static null|self $instance = null;
=======
>>>>>>> d09cb759 (.)
=======
    private static null|self $instance = null;
=======
>>>>>>> d09cb759 (.)
=======
    private static null|self $instance = null;
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> a12f125f4a (.)
=======
    private static null|self $instance = null;
>>>>>>> b93ef594b4 (.)
=======
    private static ?self $instance = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    private static null|self $instance = null;
>>>>>>> 3f537838 (.)
=======
    private static null|self $instance = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    private static null|self $instance = null;
>>>>>>> 3f537838 (.)
=======
    private static null|self $instance = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    private static null|self $instance = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    private static null|self $instance = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    private static null|self $instance = null;
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    private static ?self $instance = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    private static null|self $instance = null;
=======
=======
    private static null|self $instance = null;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> a12f125f4a (.)
=======
    private static null|self $instance = null;
>>>>>>> b93ef594b4 (.)
=======
    private static ?self $instance = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    private static ?self $instance = null;
>>>>>>> 985c7bda (.)
=======
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    private static null|self $instance = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)

    /**
     * Ottiene un'istanza singleton della classe.
     */
    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === self::$instance) {
            self::$instance = new self();
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        if (self::$instance === null) {
            self::$instance = new self;
=======
        if (null === self::$instance) {
            self::$instance = new self();
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (null === self::$instance) {
            self::$instance = new self();
>>>>>>> 75179b85 (.)
        }

        return self::$instance;
    }

    /**
     * Factory method to create an instance.
     */
    public static function make(): self
    {
        return static::getInstance();
    }

    /**
     * Sets local variables and merges them with the vars array.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> ce89c8bb (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
     *
>>>>>>> 9777d1b3 (.)
=======
     *
=======
=======
     *
=======
>>>>>>> d09cb759 (.)
=======
     *
=======
>>>>>>> d09cb759 (.)
=======
     *
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
     *
>>>>>>> 3f537838 (.)
=======
     *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
     *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
     *
>>>>>>> 3f537838 (.)
=======
     *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
     *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
     *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
     *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
     *
>>>>>>> 2941b0bd (.)
     * @param array<string, mixed> $vars
=======
=======
     *
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $vars
=======
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
=======
=======
>>>>>>> 2fc60436 (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $vars
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param array<string, mixed> $vars
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param array<string, mixed> $vars
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $vars
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
     * @param array<string, mixed> $vars
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 58816034 (.)
     * @param  array<string, mixed>  $vars
=======
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
     * @param array<string, mixed> $vars
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @param array<string, mixed> $vars
>>>>>>> 75179b85 (.)
     */
    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    /**
     * Unisce le variabili con quelle esistenti.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $vars
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $vars
=======
     * @param array<string, mixed> $vars
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param  array<string, mixed>  $vars
=======
     * @param array<string, mixed> $vars
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $vars
>>>>>>> 75179b85 (.)
     */
    public function mergeVars(array $vars): self
    {
        $this->vars = array_merge($this->vars, $vars);

        return $this;
    }

    /**
     * Invia l'SMS utilizzando il driver configurato.
     */
    public function send(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> f1c9518b (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
        // Verifichiamo che la classe esista
<<<<<<< HEAD
        if (!class_exists($engineClassName)) {
=======
        if (! class_exists($engineClassName)) {
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\'.Str::studly($this->driver).'Engine';
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> 985c7bda (.)
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\'.Str::studly($this->driver).'Engine';
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)

        // Verifichiamo che la classe esista
<<<<<<< HEAD
        if (!class_exists($engineClassName)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! class_exists($engineClassName)) {
=======
=======
>>>>>>> 75179b85 (.)
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        // Verifichiamo che la classe esista
        if (!class_exists($engineClassName)) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)

=======
        
>>>>>>> b19cd40 (.)
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

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
        // Verifichiamo che la classe abbia il metodo make
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($engineClassName, 'make')) {
=======
<<<<<<< HEAD
        if (! method_exists($engineClassName, 'make')) {
=======
        if (!method_exists($engineClassName, 'make')) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! method_exists($engineClassName, 'make')) {
=======
        if (!method_exists($engineClassName, 'make')) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
            throw new RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        // Verifichiamo che la classe abbia il metodo make
        if (!method_exists($engineClassName, 'make')) {
            throw new RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        
        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();
        
>>>>>>> b19cd40 (.)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
        
        // Verifichiamo che la classe esista
        if (!class_exists($engineClassName)) {
            throw new \RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }
        
        // Verifichiamo che la classe abbia il metodo make
        if (!method_exists($engineClassName, 'make')) {
            throw new \RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }
>>>>>>> origin/develop
        
        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        // Verifichiamo che l'istanza sia un oggetto
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_object($instance)) {
=======
<<<<<<< HEAD
        if (! is_object($instance)) {
=======
        if (!is_object($instance)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! is_object($instance)) {
=======
        if (!is_object($instance)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)

=======
        
>>>>>>> b19cd40 (.)
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

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (!method_exists($instance, $method)) {
=======
<<<<<<< HEAD
            if (! method_exists($instance, $method)) {
=======
            if (!method_exists($instance, $method)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
            if (! method_exists($instance, $method)) {
=======
            if (!method_exists($instance, $method)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
                throw new RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        // Verifichiamo che l'istanza sia un oggetto
        if (!is_object($instance)) {
            throw new RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
            if (!method_exists($instance, $method)) {
                throw new RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)

        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new ReflectionClass($instance);

            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);

            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);

            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        
        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new ReflectionClass($instance);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new ReflectionClass($instance);

            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);

            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);

            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        // Verifichiamo che l'istanza sia un oggetto
        if (!is_object($instance)) {
            throw new \RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }
        
        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
            if (!method_exists($instance, $method)) {
                throw new \RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }
        
        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new \ReflectionClass($instance);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            
            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);
            
            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);
            
            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);
            
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
            // Verifichiamo che il risultato sia un array
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_array($result)) {
=======
<<<<<<< HEAD
            if (! is_array($result)) {
=======
            if (!is_array($result)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
            if (! is_array($result)) {
=======
            if (!is_array($result)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
                $result = [];
            }
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)

=======
            
>>>>>>> b19cd40 (.)
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

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
            // Verifichiamo che il risultato sia un array
            if (!is_array($result)) {
                $result = [];
            }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
            // Convertiamo l'array in array<string, mixed>
            /** @var array<string, mixed> $typedResult */
            $typedResult = [];
            foreach ($result as $key => $value) {
                if (is_string($key)) {
                    $typedResult[$key] = $value;
                }
            }
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 58816034 (.)

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (\ReflectionException $e) {
            throw new \RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
            throw new RuntimeException('Errore durante la chiamata dei metodi: '.$e->getMessage());
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
>>>>>>> f813254 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (\ReflectionException $e) {
            throw new \RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
<<<<<<< HEAD
            throw new RuntimeException('Errore durante la chiamata dei metodi: '.$e->getMessage());
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: '.$e->getMessage());
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        }

        return $this;
    }
}
