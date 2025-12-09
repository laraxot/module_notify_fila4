<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Webmozart\Assert\Assert;

class SmtpMailSendAction
{
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
    public function execute(string $_to, string $_subject, string $_body): void
    {
        dddx('WIP');

        /*
         * $smtpData = SmtpData::make();
         * $transport = $smtpData->getTransport();
         *
         * // Start the SMTP transport
         * try {
         * $transport->start();
         * } catch (\Exception $e) {
         * throw new \Exception('Errore durante la connessione SMTP: '.$e->getMessage());
         * }
         *
         * $emailData = EmailData::from($data);
         *
         * // Verifica i dati di input e crea l'oggetto Email
         * Assert::string($email_from_address = $data['email_from_address'] ?? '');
         * Assert::string($email_from_name = $data['email_from_name'] ?? '');
         * Assert::string($email_to = $data['email_to'] ?? '');
         *
         * $from = new Address($email_from_address, $email_from_name);
         * $mailer = new Mailer($transport);
         *
         * $email = (new Email())
         * ->from($from)
         * ->to($email_to)
         * ->subject($emailData->subject)
         * ->text(strip_tags($emailData->body))
         * ->html($emailData->body);
         *
         * // Invio dell'email
         * try {
         * $mailer->send($email);
         * } catch (\Exception $e) {
         * throw new \Exception("Errore durante l'invio dell'email: ".$e->getMessage());
         * }
         */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
=======
    public function execute(string $to, string $subject, string $body): void
=======
    public function execute(string $_to, string $_subject, string $_body): void
>>>>>>> b93ef594b4 (.)
    {
        dddx('WIP');

        /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    public function execute(string $to, string $subject, string $body): void
    {
        dddx('WIP');
        /*
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
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> origin/develop
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> origin/develop
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
        $smtpData = SmtpData::make();
        $transport = $smtpData->getTransport();

        // Start the SMTP transport
        try {
            $transport->start();
        } catch (\Exception $e) {
            throw new \Exception('Errore durante la connessione SMTP: '.$e->getMessage());
        }

        $emailData = EmailData::from($data);

        // Verifica i dati di input e crea l'oggetto Email
        Assert::string($email_from_address = $data['email_from_address'] ?? '');
        Assert::string($email_from_name = $data['email_from_name'] ?? '');
        Assert::string($email_to = $data['email_to'] ?? '');

        $from = new Address($email_from_address, $email_from_name);
        $mailer = new Mailer($transport);

        $email = (new Email())
            ->from($from)
            ->to($email_to)
            ->subject($emailData->subject)
            ->text(strip_tags($emailData->body))
            ->html($emailData->body);

        // Invio dell'email
        try {
            $mailer->send($email);
        } catch (\Exception $e) {
            throw new \Exception("Errore durante l'invio dell'email: ".$e->getMessage());
        }
        */
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
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
>>>>>>> a12f125f4a (.)
=======
         * $smtpData = SmtpData::make();
         * $transport = $smtpData->getTransport();
         *
         * // Start the SMTP transport
         * try {
         * $transport->start();
         * } catch (\Exception $e) {
         * throw new \Exception('Errore durante la connessione SMTP: '.$e->getMessage());
         * }
         *
         * $emailData = EmailData::from($data);
         *
         * // Verifica i dati di input e crea l'oggetto Email
         * Assert::string($email_from_address = $data['email_from_address'] ?? '');
         * Assert::string($email_from_name = $data['email_from_name'] ?? '');
         * Assert::string($email_to = $data['email_to'] ?? '');
         *
         * $from = new Address($email_from_address, $email_from_name);
         * $mailer = new Mailer($transport);
         *
         * $email = (new Email())
         * ->from($from)
         * ->to($email_to)
         * ->subject($emailData->subject)
         * ->text(strip_tags($emailData->body))
         * ->html($emailData->body);
         *
         * // Invio dell'email
         * try {
         * $mailer->send($email);
         * } catch (\Exception $e) {
         * throw new \Exception("Errore durante l'invio dell'email: ".$e->getMessage());
         * }
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
    }
}
