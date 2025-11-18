<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class RecordNotificationData extends Data
{
    public UserContract $record;

    public string $channel;

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function getRoute(): string
    {
        switch ($this->channel) {
            case 'mail':
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

                return app(NormalizePhoneNumberAction::class)->execute($phone);
=======
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> 20a3d3b (.)

                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

<<<<<<< HEAD
                return $phone;
>>>>>>> 8bc2fc9f (first)
=======
                return app(NormalizePhoneNumberAction::class)->execute($phone);
>>>>>>> 20a3d3b (.)
        }
        throw new Exception('Channel ['.$this->channel.'] not supported');
    }
}
