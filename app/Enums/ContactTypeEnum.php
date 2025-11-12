<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
enum ContactTypeEnum: string implements HasColor, HasIcon, HasLabel
=======
enum ContactTypeEnum: string implements HasLabel, HasIcon, HasColor
>>>>>>> 99ff506 (.)
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
    case PHONE = 'phone';
    case MOBILE = 'mobile';
    case EMAIL = 'email';
    case PEC = 'pec';
    case WHATSAPP = 'whatsapp';
    case FAX = 'fax';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

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

    public static function getSearchable(): array
    {
<<<<<<< HEAD
        return array_map(fn ($item) => $item->value, ContactTypeEnum::cases());
=======
        return array_map(fn($item) => $item->value, ContactTypeEnum::cases());
>>>>>>> 99ff506 (.)
    }

    public static function getFormSchema(): array
    {
        $res = Arr::map(
            ContactTypeEnum::cases(),
<<<<<<< HEAD
            fn ($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );

=======
            fn($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );
>>>>>>> 99ff506 (.)
        return $res;
    }
<<<<<<< HEAD
=======
        return $this->transClass(self::class,$this->value.'.description');
    }


    public static function getSearchable(): array
    {
        return array_map(fn($item)=>$item->value,ContactTypeEnum::cases());
    }


    public static function getFormSchema(): array
    {
        $res=Arr::map(ContactTypeEnum::cases(), function($item){
            return TextInput::make($item->value)
            ->prefixIcon($item->getIcon());

        });
        return $res;
    }
    
   
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
}
