<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

/**
 * Enum per i driver WhatsApp supportati
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> b19cd40 (.)
=======
 *
>>>>>>> 75179b85 (.)
 * Questo enum centralizza la gestione dei driver WhatsApp disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum WhatsAppDriverEnum: string
{
    case TWILIO = 'twilio';
    case MESSAGEBIRD = 'messagebird';
    case VONAGE = 'vonage';
    case INFOBIP = 'infobip';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

    /**
     * Restituisce le opzioni per il componente Select di Filament
     *
<<<<<<< HEAD
=======
    
    /**
     * Restituisce le opzioni per il componente Select di Filament
     * 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
     * @return array<string, string>
     */
    public static function options(): array
    {
        return [
            self::TWILIO->value => 'Twilio',
            self::MESSAGEBIRD->value => 'MessageBird',
            self::VONAGE->value => 'Vonage',
            self::INFOBIP->value => 'Infobip',
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     *
<<<<<<< HEAD
=======
    
    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     * 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
     * @return array<string, string>
     */
    public static function labels(): array
    {
        return [
            self::TWILIO->value => __('notify::whatsapp.drivers.twilio'),
            self::MESSAGEBIRD->value => __('notify::whatsapp.drivers.messagebird'),
            self::VONAGE->value => __('notify::whatsapp.drivers.vonage'),
            self::INFOBIP->value => __('notify::whatsapp.drivers.infobip'),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

    /**
     * Verifica se un driver è supportato
     *
<<<<<<< HEAD
=======
    
    /**
     * Verifica se un driver è supportato
     * 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
     * @param string $driver
     * @return bool
     */
    public static function isSupported(string $driver): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        return in_array($driver, array_column(self::cases(), 'value'), strict: true);
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
     *
<<<<<<< HEAD
=======
        return in_array($driver, array_column(self::cases(), 'value'));
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
     * @return self
     */
    public static function getDefault(): self
    {
        $default = config('whatsapp.default', self::TWILIO->value);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
        return self::from(is_string($default) ? $default : self::TWILIO->value);
    }
}
