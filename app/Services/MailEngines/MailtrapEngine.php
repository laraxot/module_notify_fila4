<?php

/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\MailEngines;

<<<<<<< HEAD
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;
=======
use InvalidArgumentException;
use ErrorException;
use Exception;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
>>>>>>> 75179b8 (.)
use Webmozart\Assert\Assert;

// ---------CSS------------

/**
 * Class SmsService.
 */
class MailtrapEngine
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b (.)

    public string $to;

    public string $driver;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $body = null;

    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    public null|string $body = null;

    private static null|self $instance = null;

    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
>>>>>>> 75179b8 (.)
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function send(): self
    {
        dddx('WIP');

        return $this;
    }

    public function try(): void
    {
        // dddx($this);

        // Mail::raw('Hello World!', function($msg) {$msg->to('vair81@gmail.com')->subject('Test Email'); });

        // try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
        Mail::raw($this->body, function (Message $msg): void {
            // Verifichiamo che $this->to sia valido
            $to = $this->to;

            // Utilizziamo una condizione più appropriata
<<<<<<< HEAD
            if (! $to) {
=======
            if (!$to) {
>>>>>>> 75179b8 (.)
                throw new InvalidArgumentException('Il destinatario email non è valido');
            }

            $msg->to($to)->subject('Test Email');
        });

        // Dead catch - ErrorException is never thrown in the try block.
        // } catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.class_basename($this).']');
        // }
    }
}
