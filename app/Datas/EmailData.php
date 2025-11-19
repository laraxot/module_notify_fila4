<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email as MimeEmail;
use Webmozart\Assert\Assert;

class EmailData extends Data
{
    public string $to;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $from = null;

    public ?string $from_email = null;
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|string $from = null;

    public null|string $from_email = null;
=======
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b (.)

    public string $subject;

    public string $body_html;

    public string $body = '';

    public array $attachments = [];

    public function __construct(
        string $to,
        string $subject,
        string $body_html,
        array $attachments = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null,
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (! is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (! is_string($from_email)) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (!is_string($from_email)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (! is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (! is_string($from_email)) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
        }
        $this->from_email = $from_email;

        Assert::email($this->from_email, 'Invalid "from" email format');

        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
        $this->attachments = $attachments;
    }

    public function getFrom(): Address
    {
<<<<<<< HEAD
        if (! isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (! isset($this->from_email)) {
=======
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
>>>>>>> 75179b8 (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
            $this->from_email = $from_email;
        }

        return new Address($this->from_email, $this->from);
    }

    public function getMimeEmail(): MimeEmail
    {
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $email = (new MimeEmail)
=======
=======
>>>>>>> 207ac35 (.)
        $email = new MimeEmail()
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
=======
=======
>>>>>>> 9777d1b (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
            ->html($this->body_html)
            ->text($this->body);

        foreach ($this->attachments as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($attachment, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($attachment);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
            $email->attachFromPath($attachment); // string $path, ?string $name = null, ?string $contentType = null
        }

        return $email;
    }
}
