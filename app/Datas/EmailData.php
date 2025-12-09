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
    public null|string $from = null;

    public null|string $from_email = null;
=======
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> b19cd40 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b85 (.)

    public string $subject;

    public string $body_html;

<<<<<<< HEAD
<<<<<<< HEAD
    public string $body = '';
=======
    public string $body='';
>>>>>>> b19cd40 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)

    public array $attachments = [];

    public function __construct(
        string $to,
        string $subject,
        string $body_html,
        array $attachments = [],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
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
=======
>>>>>>> 75179b85 (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
        }
        $this->from_email = $from_email;

        Assert::email($this->from_email, 'Invalid "from" email format');

<<<<<<< HEAD
<<<<<<< HEAD
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
=======
        $this->subject = strip_tags($subject);  // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html);  // Default to plain-text version of HTML body
>>>>>>> b19cd40 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b85 (.)
        $this->attachments = $attachments;
    }

    public function getFrom(): Address
    {
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
            $this->from_email = $from_email;
        }

        return new Address($this->from_email, $this->from);
    }

    public function getMimeEmail(): MimeEmail
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

        $email = new MimeEmail()
<<<<<<< HEAD
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
            ->html($this->body_html)
            ->text($this->body);

        foreach ($this->attachments as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($attachment);
>>>>>>> b19cd40 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
            $email->attachFromPath($attachment); // string $path, ?string $name = null, ?string $contentType = null
        }

        return $email;
    }
}
