<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 75179b8 (.)
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 7148d73 (.)
use Modules\Notify\Contracts\TelegramProviderActionInterface;

/**
 * Factory per la creazione di azioni Telegram.
 *
 * Questa factory centralizza la logica di selezione del driver Telegram
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class TelegramActionFactory
{
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     *
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 75179b8 (.)
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 7148d73 (.)
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     *
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
=======
>>>>>>> 7148d73 (.)
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(null|string $driver = null): TelegramProviderActionInterface
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: '.
                (is_string($driver) ? $driver : '').
=======
=======
>>>>>>> 7148d73 (.)
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                    ". Class {$className} not found.",
            );
        }

        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_subclass_of($className, TelegramProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
        }

        $instance = app($className);

        if (! $instance instanceof TelegramProviderActionInterface) {
            throw new Exception("Failed to create instance of {$className}.");
        }

        /** @var TelegramProviderActionInterface $instance */
        return $instance;
=======
=======
>>>>>>> 7148d73 (.)
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
        }

<<<<<<< HEAD
        return app($className);
>>>>>>> 75179b8 (.)
=======
        /** @var TelegramProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
>>>>>>> 7148d73 (.)
    }
}
