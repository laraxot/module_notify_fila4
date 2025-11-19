<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class RecordNotificationData extends Data
{
    public UserContract $record;
<<<<<<< HEAD

=======
>>>>>>> 75179b8 (.)
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
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

                return app(NormalizePhoneNumberAction::class)->execute($phone);
        }
        throw new Exception('Channel ['.$this->channel.'] not supported');
=======
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
>>>>>>> 75179b8 (.)
    }
}
