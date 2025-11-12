<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

<<<<<<< HEAD
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionException;
use RuntimeException;
=======
use RuntimeException;
use ReflectionClass;
use ReflectionException;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
>>>>>>> 99ff506 (.)

/**
 * Classe per l'invio di SMS.
 */
class SmsService
{
    // ---------CSS------------
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;

=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
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
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)

    /**
     * Ottiene un'istanza singleton della classe.
     */
    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (self::$instance === null) {
            self::$instance = new self;
=======
        if (null === self::$instance) {
            self::$instance = new self();
>>>>>>> 99ff506 (.)
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
     *
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
     * @param array<string, mixed> $vars
>>>>>>> 99ff506 (.)
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
     * @param  array<string, mixed>  $vars
=======
     * @param array<string, mixed> $vars
>>>>>>> 99ff506 (.)
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
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\'.Str::studly($this->driver).'Engine';

        // Verifichiamo che la classe esista
        if (! class_exists($engineClassName)) {
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Verifichiamo che la classe esista
        if (!class_exists($engineClassName)) {
>>>>>>> 99ff506 (.)
            throw new RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Verifichiamo che la classe abbia il metodo make
<<<<<<< HEAD
        if (! method_exists($engineClassName, 'make')) {
=======
        if (!method_exists($engineClassName, 'make')) {
>>>>>>> 99ff506 (.)
            throw new RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

<<<<<<< HEAD
=======
        
        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();
        
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        // Verifichiamo che l'istanza sia un oggetto
<<<<<<< HEAD
        if (! is_object($instance)) {
=======
        if (!is_object($instance)) {
>>>>>>> 99ff506 (.)
            throw new RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
<<<<<<< HEAD
            if (! method_exists($instance, $method)) {
=======
            if (!method_exists($instance, $method)) {
>>>>>>> 99ff506 (.)
                throw new RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

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
=======
        
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
            
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            // Verifichiamo che il risultato sia un array
<<<<<<< HEAD
            if (! is_array($result)) {
=======
            if (!is_array($result)) {
>>>>>>> 99ff506 (.)
                $result = [];
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
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
=======
>>>>>>> 4e2ebfb (.)

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
<<<<<<< HEAD
            throw new RuntimeException('Errore durante la chiamata dei metodi: '.$e->getMessage());
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
        }

        return $this;
    }
}
