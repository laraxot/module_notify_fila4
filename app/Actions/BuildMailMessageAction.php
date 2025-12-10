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
        ?DataCollection $dataCollection = null,
>>>>>>> 58816034 (.)
=======
        ?DataCollection $dataCollection = null,
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        null|DataCollection $dataCollection = null,
=======
        ?DataCollection $dataCollection = null
>>>>>>> b19cd40 (.)
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
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b3 (.)
=======
        null|DataCollection $dataCollection = null,
=======
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> 4689a827 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> f2e64178 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> 2effe245 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> 4689a827 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> f2e64178 (.)
=======
        null|DataCollection $dataCollection = null,
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 3f537838 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 3f537838 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 2941b0bd (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 98d837b9 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
        ?DataCollection $dataCollection = null,
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
        null|DataCollection $dataCollection = null,
=======
        ?DataCollection $dataCollection = null
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 2941b0bd (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 98d837b9 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 985c7bda (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        null|DataCollection $dataCollection = null,
>>>>>>> 9777d1b3 (.)
    ): MailMessage {
        $view_params = array_merge($model->toArray(), $view_params);

        $type = 'email';

        $theme = app(Get::class)->execute($name, $type, $view_params);
        $view_html = 'notify::email';
        // dddx([$theme, $view_params]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $fromAddress = $theme->view_params['from_email'] ?? $theme->from_email;
        $fromName = $theme->view_params['from'] ?? $theme->from;
        $subject = $view_params['subject'] ?? $theme->subject;
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $params = [
            'from_address' => $theme->view_params['from_email'] ?? $theme->from_email,
            'from_name' => $theme->view_params['from'] ?? $theme->from,
            'subject' => $view_params['subject'] ?? $theme->subject,
        ];
>>>>>>> c8b1c8bf (.)

=======
        
>>>>>>> b19cd40 (.)
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
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
        $email = (new MailMessage)
            ->from($params['from_address'], $params['from_name'])
            ->subject($params['subject'])
=======
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
        $fromAddress = $theme->view_params['from_email'] ?? $theme->from_email;
        $fromName = $theme->view_params['from'] ?? $theme->from;
        $subject = $view_params['subject'] ?? $theme->subject;

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
>>>>>>> c8b1c8bf (.)
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        // Utilizziamo asserzioni per verificare che i valori siano stringhe
        if (!is_string($fromAddress)) {
            $fromAddress = '';
        }
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
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
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
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
        // Il nome del mittente può essere null
        if ($fromName !== null && !is_string($fromName)) {
            $fromName = '';
        }
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 677a6ab7 (.)
        $email = (new MailMessage())
=======
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
        $email = new MailMessage()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 6ba141fc (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 2effe245 (.)
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
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
>>>>>>> c8b1c8bf (.)
=======
        $email = new MailMessage()
            ->from($fromAddress, $fromName)
            ->subject($subject)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            ->view($view_html, $theme->view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 9777d1b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

        $email = new MailMessage()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
=======
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 011072e4 (.)
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
=======
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 4d2eb53e (.)
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 677a6ab7 (.)
        $email = (new MailMessage())
=======
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
        $email = new MailMessage()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
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
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

<<<<<<< HEAD
        $email = new MailMessage()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
        $email = (new MailMessage())
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
        $email = (new MailMessage())
=======
<<<<<<< HEAD
        $email = new MailMessage()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
=======
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 985c7bda (.)

        if (!is_string($subject)) {
            $subject = 'Notifica';
        }

<<<<<<< HEAD
        $email = new MailMessage()
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
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
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 367c6ceb (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0db165c (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
=======
>>>>>>> 1fd232c (.)
=======
>>>>>>> 75179b85 (.)
        $email = new MailMessage()
=======
        
        if (!is_string($subject)) {
            $subject = 'Notifica';
        }
        
        $email = (new MailMessage())
>>>>>>> b19cd40 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
        $email = new MailMessage()
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> d13ead25 (.)
=======
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
        $email = new MailMessage()
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> fd497554 (.)
        $email = new MailMessage()
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
=======
        $email = (new MailMessage())
>>>>>>> 5e14ac3 (.)
=======
        $email = (new MailMessage())
=======
<<<<<<< HEAD
        $email = new MailMessage()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
        $email = new MailMessage();
        $email = $email->from($fromAddress, $fromName);
        $email = $email->subject($subject);
        $email = $email->view($view_html, $theme->view_params);
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
=======
>>>>>>> 1fd232c (.)
        $email = new MailMessage()
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
=======
            ->from($fromAddress, $fromName)
            ->subject($subject)
            ->view($view_html, $theme->view_params);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

        if ($dataCollection instanceof DataCollection) {
            foreach ($dataCollection as $attachment) {
                $email = $email->attach($attachment->path, ['as' => $attachment->as, 'mime' => $attachment->mime]);
            }
        }

        return $email;
    }
}
