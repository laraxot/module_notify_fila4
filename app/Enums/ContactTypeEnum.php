<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
 *
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

    case PHONE = 'phone';
    case MOBILE = 'mobile';
    case EMAIL = 'email';
    case PEC = 'pec';
    case WHATSAPP = 'whatsapp';
    case FAX = 'fax';

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return $this->transClass(self::class, $this->value . '.color');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> f5f1cb1 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> e11621f (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> f5f1cb1 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> 99ff506 (.)
    }

    /**
     * @return array<string>
     */
    public static function getSearchable(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return array_map(fn ($item) => $item->value, ContactTypeEnum::cases());
=======
        return array_map(fn($item) => $item->value, ContactTypeEnum::cases());
>>>>>>> 99ff506 (.)
=======
        /** @var array<string> $result */
        $result = array_map(fn ($item) => $item->value, ContactTypeEnum::cases());

        return $result;
>>>>>>> 05bc3ad (.)
=======
        return array_map(fn ($item) => $item->value, ContactTypeEnum::cases());
>>>>>>> ab15d0e (.)
    }

    public static function getFormSchema(): array
    {
        $res = Arr::map(
            ContactTypeEnum::cases(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            fn ($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );

=======
            fn($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );
>>>>>>> 99ff506 (.)
        return $res;
=======
            function ($item) {
                if (! $item instanceof ContactTypeEnum) {
                    return;
                }

                return TextInput::make($item->value)->prefixIcon($item->getIcon());
            },
        );

        return array_filter($res);
>>>>>>> 05bc3ad (.)
=======
            fn ($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
=======
            function (ContactTypeEnum $item) {
                return TextInput::make($item->value)->prefixIcon($item->getIcon());
            },
>>>>>>> 6a92a74 (.)
        );

        /** @var array $res */
        return $res;
>>>>>>> ab15d0e (.)
    }
}
