<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
 *
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
<<<<<<< HEAD
enum SmsDriverEnum: string implements HasColor, HasIcon, HasLabel
=======
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
>>>>>>> 75179b8 (.)
{
    use TransTrait;

    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
    case AGILETELECOM = 'agiletelecom';

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 9777d1b (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 9777d1b (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> 75179b8 (.)
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
<<<<<<< HEAD
=======
     *
     * @return self
>>>>>>> 75179b8 (.)
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);

        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
    }
}
