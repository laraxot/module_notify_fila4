<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        switch ($this->channel) {
            case 'mail':
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
}
