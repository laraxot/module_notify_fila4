<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

/**
 * Enum per i tipi di media supportati
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
 * Questo enum centralizza la gestione dei tipi di media disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum MediaTypeEnum: string
{
    case IMAGE = 'image';
    case VIDEO = 'video';
    case DOCUMENT = 'document';
    case AUDIO = 'audio';
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
            self::IMAGE->value => 'Image',
            self::VIDEO->value => 'Video',
            self::DOCUMENT->value => 'Document',
            self::AUDIO->value => 'Audio',
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
            self::IMAGE->value => __('notify::whatsapp.media_types.image'),
            self::VIDEO->value => __('notify::whatsapp.media_types.video'),
            self::DOCUMENT->value => __('notify::whatsapp.media_types.document'),
            self::AUDIO->value => __('notify::whatsapp.media_types.audio'),
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

    /**
     * Verifica se un tipo di media è supportato
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Verifica se un tipo di media è supportato
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Verifica se un tipo di media è supportato
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @param string $type
     * @return bool
>>>>>>> f813254 (.)
     */
    public static function isSupported(string $type): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        return in_array($type, array_column(self::cases(), 'value'), strict: true);
    }

    /**
     * Restituisce il tipo di media predefinito
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
        return in_array($type, array_column(self::cases(), 'value'));
=======
        return in_array($type, array_column(self::cases(), 'value'), strict: true);
>>>>>>> b93ef594b4 (.)
    }

    /**
     * Restituisce il tipo di media predefinito
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
        return in_array($type, array_column(self::cases(), 'value'));
    }
    
    /**
     * Restituisce il tipo di media predefinito
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @return self
>>>>>>> f813254 (.)
     */
    public static function getDefault(): self
    {
        return self::IMAGE;
    }
}
