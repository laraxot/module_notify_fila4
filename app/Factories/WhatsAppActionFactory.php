<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
=======
use Modules\Notify\Actions\WhatsApp\Send360dialogWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendFacebookWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendTwilioWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendVonageWhatsAppAction;
>>>>>>> 99ff506 (.)
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)

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
<<<<<<< HEAD
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     *
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
>>>>>>> 99ff506 (.)
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
<<<<<<< HEAD
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     *
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> 99ff506 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2c515f (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($normalizedDriver)) {
=======
        if (!is_string($normalizedDriver)) {
>>>>>>> 99ff506 (.)
            $normalizedDriver = '';
        }
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

        if (!is_string($normalizedDriver)) {
            $normalizedDriver = '';
        }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8d298d6 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
=======
>>>>>>> d2c515f (.)

=======
>>>>>>> 6a92a74 (.)
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
>>>>>>> 99ff506 (.)
                    ". Class {$className} not found.",
            );
        }

        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
        if (! is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> 99ff506 (.)
            throw new Exception("Class {$className} does not implement WhatsAppProviderActionInterface.");
        }

        $instance = app($className);

        if (! $instance instanceof WhatsAppProviderActionInterface) {
            throw new Exception("Failed to create instance of {$className}.");
        }

        /** @var WhatsAppProviderActionInterface $instance */
        return $instance;
    }
}
