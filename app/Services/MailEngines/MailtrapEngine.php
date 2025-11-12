<?php

/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\MailEngines;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
=======
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use ErrorException;
use Exception;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
    public null|string $from = null;
>>>>>>> e11621f (.)
=======
    public null|string $from = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $from = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    public string $to;

    public string $driver;

<<<<<<< HEAD
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
    public null|string $body = null;

    private static null|self $instance = null;

    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
<<<<<<< HEAD
=======
=======
    public ?string $body = null;
=======
    public null|string $body = null;
>>>>>>> b93ef594b4 (.)

    private static null|self $instance = null;

    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (! self::$instance instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!(self::$instance instanceof self)) {
>>>>>>> b93ef594b4 (.)
=======
    public ?string $body = null;

    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if (! self::$instance instanceof self) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            self::$instance = new self();
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> e11621f (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($this->body);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        Mail::raw($this->body, function (Message $msg): void {
            // Verifichiamo che $this->to sia valido
            $to = $this->to;

            // Utilizziamo una condizione più appropriata
<<<<<<< HEAD
            if (! $to) {
=======
            if (!$to) {
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
                throw new InvalidArgumentException('Il destinatario email non è valido');
=======
<<<<<<< HEAD
                throw new InvalidArgumentException('Il destinatario email non è valido');
=======
                throw new \InvalidArgumentException('Il destinatario email non è valido');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            }

            $msg->to($to)->subject('Test Email');
        });
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Dead catch - ErrorException is never thrown in the try block.
        // } catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.class_basename($this).']');
        // }
    }
}
