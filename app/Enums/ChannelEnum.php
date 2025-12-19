<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

use Modules\Xot\Traits\EnumTrait;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ChannelEnum: string implements HasColor, HasIcon, HasLabel
{
    use EnumTrait;

    case Mail = 'mail';
    case Sms = 'sms';
    case WhatsApp = 'whatsapp';

    public function getNotificationChannel(): string
    {
        return match ($this) {
            self::Mail => 'mail',
            self::Sms => \Modules\Notify\Channels\SmsChannel::class,
            self::WhatsApp => \Modules\Notify\Channels\WhatsAppChannel::class,
        };
    }
}