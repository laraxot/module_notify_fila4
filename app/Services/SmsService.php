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
>>>>>>> 75179b8 (.)

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
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;

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
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
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
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    private static null|self $instance = null;
>>>>>>> 9777d1b (.)

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
>>>>>>> 75179b8 (.)
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
     *
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
>>>>>>> 82ae73b (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @param array<string, mixed> $vars
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)
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

        // Verifichiamo che la classe esista
        if (!class_exists($engineClassName)) {
>>>>>>> 75179b8 (.)
            throw new RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }

        // Verifichiamo che la classe abbia il metodo make
<<<<<<< HEAD
        if (! method_exists($engineClassName, 'make')) {
=======
        if (!method_exists($engineClassName, 'make')) {
>>>>>>> 75179b8 (.)
            throw new RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

        // Verifichiamo che l'istanza sia un oggetto
<<<<<<< HEAD
        if (! is_object($instance)) {
=======
        if (!is_object($instance)) {
>>>>>>> 75179b8 (.)
            throw new RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }

        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
<<<<<<< HEAD
            if (! method_exists($instance, $method)) {
=======
            if (!method_exists($instance, $method)) {
>>>>>>> 75179b8 (.)
                throw new RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }

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

            // Verifichiamo che il risultato sia un array
<<<<<<< HEAD
            if (! is_array($result)) {
=======
            if (!is_array($result)) {
>>>>>>> 75179b8 (.)
                $result = [];
            }

            // Convertiamo l'array in array<string, mixed>
            /** @var array<string, mixed> $typedResult */
            $typedResult = [];
            foreach ($result as $key => $value) {
                if (is_string($key)) {
                    $typedResult[$key] = $value;
                }
            }

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
<<<<<<< HEAD
            throw new RuntimeException('Errore durante la chiamata dei metodi: '.$e->getMessage());
=======
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        }

        return $this;
    }
}
