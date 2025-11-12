<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

/**
 * Enum per i driver Telegram supportati
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
 * Questo enum centralizza la gestione dei driver Telegram disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum TelegramDriverEnum: string
{
    case TELEGRAM = 'telegram';
    case BOTAPI = 'botapi';
    case LARAVEL_TELEGRAM = 'laravel-telegram';
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
            self::TELEGRAM->value => 'Telegram',
            self::BOTAPI->value => 'Bot API',
            self::LARAVEL_TELEGRAM->value => 'Laravel Telegram',
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
            self::TELEGRAM->value => __('notify::telegram.drivers.telegram'),
            self::BOTAPI->value => __('notify::telegram.drivers.botapi'),
            self::LARAVEL_TELEGRAM->value => __('notify::telegram.drivers.laravel_telegram'),
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
        $default = config('telegram.default', self::TELEGRAM->value);
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
        return self::from(is_string($default) ? $default : self::TELEGRAM->value);
    }
}
