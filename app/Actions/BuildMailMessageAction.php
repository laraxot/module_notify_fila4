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
        null|DataCollection $dataCollection = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        null|DataCollection $dataCollection = null,
=======
        ?DataCollection $dataCollection = null
>>>>>>> a12f125f4a (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> b93ef594b4 (.)
=======
        ?DataCollection $dataCollection = null
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
        $fromAddress = $theme->view_params['from_email'] ?? $theme->from_email;
        $fromName = $theme->view_params['from'] ?? $theme->from;
        $subject = $view_params['subject'] ?? $theme->subject;
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
        // Utilizziamo asserzioni per verificare che i valori siano stringhe
        if (!is_string($fromAddress)) {
            $fromAddress = '';
        }
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
        // Il nome del mittente può essere null
        if ($fromName !== null && !is_string($fromName)) {
            $fromName = '';
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

        $email = new MailMessage()
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

        $email = new MailMessage()
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);

        if ($dataCollection instanceof DataCollection) {
            foreach ($dataCollection as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
