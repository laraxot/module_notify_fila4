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
        ?DataCollection $dataCollection = null,
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
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

        $email = (new MailMessage())
            ->from($params['from_address'], $params['from_name'])
            ->subject($params['subject'])
            ->view($view_html, $theme->view_params);

        if ($dataCollection instanceof DataCollection) {
            foreach ($dataCollection as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
