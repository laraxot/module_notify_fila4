<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum ContactTypeEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
    case PHONE = 'phone';
    case MOBILE = 'mobile';
    case EMAIL = 'email';
    case PEC = 'pec';
    case WHATSAPP = 'whatsapp';
    case FAX = 'fax';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        return $this->transClass(self::class, $this->value . '.description');
    }

<<<<<<< HEAD
    /**
     * @return array<string>
     */
=======
>>>>>>> 75179b85 (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
    }

>>>>>>> 75179b85 (.)
    public static function getSearchable(): array
    {
        return array_map(fn($item) => $item->value, ContactTypeEnum::cases());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, \Filament\Forms\Components\TextInput>
     */
    public static function getFormSchema(): array
    {
        // ContactTypeEnum::cases() restituisce un array shape specifico, non list<ContactTypeEnum>
        $cases = ContactTypeEnum::cases();
        /** @var array<string, \Filament\Forms\Components\TextInput> $result */
        $result = [];
        foreach ($cases as $item) {
            $result[$item->value] = TextInput::make($item->value)->prefixIcon($item->getIcon());
        }
        return $result;
=======
=======
>>>>>>> 75179b85 (.)
    public static function getFormSchema(): array
    {
        $res = Arr::map(
            ContactTypeEnum::cases(),
            fn($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );
        return $res;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
    }
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
<<<<<<< HEAD
=======
    }
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
}
