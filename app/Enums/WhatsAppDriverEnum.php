<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

/**
 * Enum per i driver WhatsApp supportati
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

    /**
     * Restituisce le opzioni per il componente Select di Filament
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Restituisce le opzioni per il componente Select di Filament
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Restituisce le opzioni per il componente Select di Filament
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

    /**
     * Verifica se un driver è supportato
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Verifica se un driver è supportato
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Verifica se un driver è supportato
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @param string $driver
     * @return bool
>>>>>>> 99ff506 (.)
     */
    public static function isSupported(string $driver): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        return in_array($driver, array_column(self::cases(), 'value'), strict: true);
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
        return in_array($driver, array_column(self::cases(), 'value'));
=======
        return in_array($driver, array_column(self::cases(), 'value'), strict: true);
>>>>>>> b93ef594b4 (.)
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
        return in_array($driver, array_column(self::cases(), 'value'));
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @return self
>>>>>>> 99ff506 (.)
     */
    public static function getDefault(): self
    {
        $default = config('whatsapp.default', self::TWILIO->value);
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
        return self::from(is_string($default) ? $default : self::TWILIO->value);
    }
}
