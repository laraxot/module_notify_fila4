<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
use Modules\Notify\Contracts\TelegramProviderActionInterface;

/**
 * Factory per la creazione di azioni Telegram.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
 *
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
 * Questa factory centralizza la logica di selezione del driver Telegram
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class TelegramActionFactory
{
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     *
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
    public function create(null|string $driver = null): TelegramProviderActionInterface
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
                    ". Class {$className} not found.",
            );
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
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> b93ef594b4 (.)
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
                    ". Class {$className} not found.",
            );
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
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
    public function create(?string $driver = null): TelegramProviderActionInterface
    {
        $driver = $driver ?? Config::get('telegram.default', 'official');
        
        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));
        
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";
        
        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception("Unsupported Telegram driver: " . (is_string($driver) ? $driver : '') . ". Class {$className} not found.");
        }
        
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
        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
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
        /** @var TelegramProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
=======
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
=======
>>>>>>> 3f537838 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
        return app($className);
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
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
        
>>>>>>> b19cd40 (.)
        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
    }
}
