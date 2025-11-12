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
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 4e2ebfb (.)
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
<<<<<<< HEAD
enum SmsDriverEnum: string implements HasColor, HasIcon, HasLabel
=======
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
>>>>>>> 99ff506 (.)
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
    case AGILETELECOM = 'agiletelecom';

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> 99ff506 (.)
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
<<<<<<< HEAD
=======
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
>>>>>>> 4e2ebfb (.)
     * @return self
>>>>>>> 99ff506 (.)
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
    }
}
