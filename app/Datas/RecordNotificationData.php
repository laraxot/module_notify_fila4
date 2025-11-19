<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
=======
        switch($this->channel){
            case 'mail':
                Assert::string($email=$this->record->email);
                return $email;
            case 'sms':
                Assert::string($phone=$this->record->phone);
                $phone=app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
}
