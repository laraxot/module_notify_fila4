<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

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

/**
 * Classe per l'invio di SMS.
 */
class SmsService
{
    // ---------CSS------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public null|string $to = null;

    public null|string $from = null;

    public null|string $body = null;
<<<<<<< HEAD
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
=======
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
    private static null|self $instance = null;
=======
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

    /**
     * Ottiene un'istanza singleton della classe.
     */
    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
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
     * @param array<string, mixed> $vars
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

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
            
            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);
            
            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);
            
            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            // Verifichiamo che il risultato sia un array
            if (!is_array($result)) {
                $result = [];
            }
<<<<<<< HEAD

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
            // Convertiamo l'array in array<string, mixed>
            /** @var array<string, mixed> $typedResult */
            $typedResult = [];
            foreach ($result as $key => $value) {
                if (is_string($key)) {
                    $typedResult[$key] = $value;
                }
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException('Errore durante la chiamata dei metodi: ' . $e->getMessage());
<<<<<<< HEAD
=======
=======
            
            $this->mergeVars($typedResult);
        } catch (ReflectionException $e) {
            throw new RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
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
        }

        return $this;
    }
}
