<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
use Modules\Notify\Actions\NotifyTheme\Get;
use Modules\Notify\Datas\AttachmentData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BuildMailMessageAction
{
    use QueueableAction;

    /**
     * @param  DataCollection<AttachmentData>  $dataCollection
     */
    public function execute(
        string $name,
        Model $model,
        array $view_params = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?DataCollection $dataCollection = null,
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        null|DataCollection $dataCollection = null,
=======
        ?DataCollection $dataCollection = null
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
<<<<<<< HEAD
        $params = [
            'from_address' => $theme->view_params['from_email'] ?? $theme->from_email,
            'from_name' => $theme->view_params['from'] ?? $theme->from,
            'subject' => $view_params['subject'] ?? $theme->subject,
        ];

        Assert::keyExists($params, 'from_address');
        Assert::keyExists($params, 'from_name');
        Assert::keyExists($params, 'subject');
        Assert::string($params['from_address'], 'from_address must be string');
        Assert::nullOrString($params['from_name'], 'from_name must be string or null');
        Assert::string($params['subject'], 'subject must be string');

        $email = (new MailMessage)
            ->from($params['from_address'], $params['from_name'])
            ->subject($params['subject'])
=======
        $fromAddress = $theme->view_params['from_email'] ?? $theme->from_email;
        $fromName = $theme->view_params['from'] ?? $theme->from;
        $subject = $view_params['subject'] ?? $theme->subject;
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Utilizziamo asserzioni per verificare che i valori siano stringhe
        if (!is_string($fromAddress)) {
            $fromAddress = '';
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Il nome del mittente può essere null
        if ($fromName !== null && !is_string($fromName)) {
            $fromName = '';
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

<<<<<<< HEAD
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
>>>>>>> 75179b8 (.)
            ->view($view_html, $theme->view_params);
=======
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
>>>>>>> 4e2ebfb (.)

        if ($dataCollection instanceof DataCollection) {
            foreach ($dataCollection as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
