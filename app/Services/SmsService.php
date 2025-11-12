<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

<<<<<<< HEAD
=======
use RuntimeException;
use ReflectionClass;
use ReflectionException;
>>>>>>> f5f1cb1 (.)
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

/**
 * Classe per l'invio di SMS.
 */
class SmsService
{
    // ---------CSS------------
<<<<<<< HEAD
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;

=======
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
>>>>>>> f5f1cb1 (.)
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
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> f5f1cb1 (.)

    /**
     * Ottiene un'istanza singleton della classe.
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
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
     * @param  array<string, mixed>  $vars
=======
     * @param array<string, mixed> $vars
>>>>>>> f5f1cb1 (.)
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
     * @param  array<string, mixed>  $vars
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
=======
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
>>>>>>> f5f1cb1 (.)

        // Verifichiamo che la classe esista
        if (! class_exists($engineClassName)) {
            throw new RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }

        // Verifichiamo che la classe abbia il metodo make
        if (! method_exists($engineClassName, 'make')) {
            throw new RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

        // Verifichiamo che l'istanza sia un oggetto
        if (! is_object($instance)) {
            throw new RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }

        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
            if (! method_exists($instance, $method)) {
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
            if (! is_array($result)) {
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
>>>>>>> f5f1cb1 (.)
        }

        return $this;
    }
}
