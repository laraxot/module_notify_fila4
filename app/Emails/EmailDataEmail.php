<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
>>>>>>> 75179b8 (.)
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
<<<<<<< HEAD
    public function __construct(
        public EmailData $email_data,
    ) {}
=======
    public function __construct(public EmailData $email_data)
    {
    }
>>>>>>> b19cd40 (.)
=======
    public function __construct(
        public EmailData $email_data,
    ) {}
>>>>>>> 4e2ebfb (.)

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->email_data->from === null) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if ($this->email_data->from_email === null) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
        if (null === $this->email_data->from) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if (null === $this->email_data->from_email) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
        if (null == $this->email_data->from) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->email_data->from = $from;
        }
        if (null == $this->email_data->from_email) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
            $this->email_data->from_email = $from_email;
        }

<<<<<<< HEAD
        return new Envelope(
            from: new Address($this->email_data->from_email, $this->email_data->from),
            subject: $this->email_data->subject,
        );
=======
        $envelope = new Envelope(
            from: new Address($this->email_data->from_email, $this->email_data->from),
            subject: $this->email_data->subject,
        );

        return $envelope;
>>>>>>> 75179b8 (.)
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
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath('/path/to/file'),
        ];
    }
}
