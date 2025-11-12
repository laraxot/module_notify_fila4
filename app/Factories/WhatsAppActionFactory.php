<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
use Exception;
use Illuminate\Support\Facades\Config;
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)

/**
 * Factory per la creazione di azioni WhatsApp.
 *
 * Questa factory centralizza la logica di selezione del driver WhatsApp
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class WhatsAppActionFactory
{
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     *
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     *
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     *
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> f5f1cb1 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

        if (! is_string($normalizedDriver)) {
            $normalizedDriver = '';
        }
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> e39a6f9 (.)
=======
<<<<<<< HEAD
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 62b0c9c (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)

>>>>>>> 31bdf6b (.)
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
                    ". Class {$className} not found.",
            );
        }

        // Verifica se la classe implementa l'interfaccia richiesta
        if (! is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement WhatsAppProviderActionInterface.");
        }

<<<<<<< HEAD
        $instance = app($className);

        if (! $instance instanceof WhatsAppProviderActionInterface) {
            throw new Exception("Failed to create instance of {$className}.");
        }

        /** @var WhatsAppProviderActionInterface $instance */
        return $instance;
=======
        return app($className);
>>>>>>> f5f1cb1 (.)
    }
}
