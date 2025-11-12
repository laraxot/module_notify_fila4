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
>>>>>>> 99ff506 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 99ff506 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 99ff506 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
=======
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
}
