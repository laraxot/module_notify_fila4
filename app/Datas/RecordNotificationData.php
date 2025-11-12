<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> f813254 (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        switch ($this->channel) {
            case 'mail':
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);

                return $phone;
        }
        throw new Exception('Channel ['.$this->channel.'] not supported');
    }
<<<<<<< HEAD
=======
=======
        switch($this->channel){
=======
        switch ($this->channel) {
>>>>>>> b93ef594b4 (.)
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


>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
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
        throw new \Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
