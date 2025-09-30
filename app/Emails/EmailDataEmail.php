<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
=======
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Modules\Notify\Datas\EmailData;
use Webmozart\Assert\Assert;

class EmailDataEmail extends Mailable
{
    use Queueable;
    use SerializesModels;

<<<<<<< HEAD
    public function __construct(
        public EmailData $email_data,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public EmailData $email_data,
    ) {}
=======
    public function __construct(public EmailData $email_data)
    {
    }
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        public EmailData $email_data,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public EmailData $email_data)
    {
    }
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        if (null === $this->email_data->from) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if (null === $this->email_data->from_email) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (null == $this->email_data->from) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if (null == $this->email_data->from_email) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (null === $this->email_data->from) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if (null === $this->email_data->from_email) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
            $this->email_data->from_email = $from_email;
        }

        $envelope = new Envelope(
            from: new Address($this->email_data->from_email, $this->email_data->from),
            subject: $this->email_data->subject,
        );

        return $envelope;
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'notify::emails.html',
            text: 'notify::emails.text',
            with: [
                'email_data' => $this->email_data,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
<<<<<<< HEAD
     * @return array<int, Attachment>
=======
<<<<<<< HEAD
     * @return array<int, Attachment>
=======
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath('/path/to/file'),
        ];
    }
}
