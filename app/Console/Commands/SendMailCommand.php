<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Webmozart\Assert\Assert;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email using user-provided details';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        Assert::string($from = config('mail.from.name', 'Default Sender'));
        Assert::string($from_email = config('mail.from.address', 'default@example.com'));
        $data = [];
        $data['recipient'] = $this->ask('Enter the recipient\'s email address');
        $data['subject'] = $this->ask('Enter the subject of the email');
        $data['from'] = $this->ask('Enter the sender\'s name', $from);
        $data['from_email'] = $this->ask('Enter the sender\'s email address', $from_email);
        $data['body_html'] = $this->ask('Enter the HTML body of the email', '<p>This is a default HTML body</p>');
        // $data['body'] = $this->ask('Enter the plain text body of the email (leave blank to use stripped HTML body)') ?? strip_tags( $data['body_html']);

        $emailData = EmailData::from($data);

        SmtpData::make()->send($emailData);

        /*
<<<<<<< HEAD
         * Notification::route('mail', $emailData->recipient)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
         * Notification::route('mail', $emailData->to)
>>>>>>> 75cb51873 (.)
         * ->notify(new EmailDataNotification($emailData));
         */
        // Mail::to($emailData->recipient)->send(new EmailDataEmail($emailData));

<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('Email sent successfully to '.$emailData->recipient);
=======
=======
>>>>>>> cf20697a6 (.)
        $this->info('Email sent successfully to ' . $emailData->to);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
        Notification::route('mail', $emailData->to)
            ->notify(new EmailDataNotification($emailData));
        */
        // Mail::to($emailData->to)->send(new EmailDataEmail($emailData));

        $this->info('Email sent successfully to '.$emailData->to);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
         * Notification::route('mail', $emailData->to)
         * ->notify(new EmailDataNotification($emailData));
         */
        // Mail::to($emailData->to)->send(new EmailDataEmail($emailData));

        $this->info('Email sent successfully to ' . $emailData->to);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
        $this->info('Email sent successfully to '.$emailData->to);
=======
        $this->info('Email sent successfully to ' . $emailData->to);
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)

        return Command::SUCCESS;
    }
}
