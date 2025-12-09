<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)

=======
>>>>>>> b19cd40 (.)
=======

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    case AGILETELECOM = 'agiletelecom';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        return $this->transClass(self::class, $this->value . '.description');
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        return $this->transClass(self::class,$this->value.'.description');
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
     * @return self
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
    }
}
