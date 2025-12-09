<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> b19cd40 (.)
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 75179b85 (.)
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> b19cd40 (.)
=======
 *
>>>>>>> 75179b85 (.)
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
    case AGILETELECOM = 'agiletelecom';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
=======
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> b19cd40 (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 75179b85 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> b19cd40 (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 75179b85 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        return $this->transClass(self::class, $this->value . '.description');
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
     *
<<<<<<< HEAD
=======
        return $this->transClass(self::class,$this->value.'.description');
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
        $default = config('sms.default', self::SMSFACTOR->value);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
    }
}
