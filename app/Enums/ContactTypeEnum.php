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
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> 75179b8 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> 75179b8 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
    }

    /**
     * @return array<string>
     */
    public static function getSearchable(): array
    {
        return array_map(fn ($item) => $item->value, ContactTypeEnum::cases());
=======
        return $this->transClass(self::class, $this->value . '.description');
    }

    public static function getSearchable(): array
    {
        return array_map(fn($item) => $item->value, ContactTypeEnum::cases());
>>>>>>> 75179b8 (.)
    }

    public static function getFormSchema(): array
    {
<<<<<<< HEAD
        return Arr::map(
            ContactTypeEnum::cases(),
            function (ContactTypeEnum $item) {
                return TextInput::make($item->value)->prefixIcon($item->getIcon());
            },
        );
=======
        $res = Arr::map(
            ContactTypeEnum::cases(),
            fn($item) => TextInput::make($item->value)->prefixIcon($item->getIcon()),
        );
        return $res;
>>>>>>> 75179b8 (.)
    }
}
