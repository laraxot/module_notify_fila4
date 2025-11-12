<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 99ff506 (.)
use Modules\Notify\Contracts\TelegramProviderActionInterface;

/**
 * Factory per la creazione di azioni Telegram.
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
 * Questa factory centralizza la logica di selezione del driver Telegram
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class TelegramActionFactory
{
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     *
<<<<<<< HEAD
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     *
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 99ff506 (.)
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
<<<<<<< HEAD
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     *
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> 99ff506 (.)
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
>>>>>>> 99ff506 (.)
                    ". Class {$className} not found.",
            );
        }

<<<<<<< HEAD
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
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
        if (! is_subclass_of($className, TelegramProviderActionInterface::class)) {
=======
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
>>>>>>> 99ff506 (.)
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
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
        return app($className);
    }
}
