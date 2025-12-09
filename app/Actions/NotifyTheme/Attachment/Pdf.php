<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\NotifyTheme\Attachment;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Notify\Actions\NotifyTheme\Get;
use Modules\Notify\Datas\AttachmentData;
use Modules\Xot\Services\HtmlService;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * -- buildmailmessage ha troppi pezzi simili ..
 */
class Pdf
{
    use QueueableAction;

    public function execute(string $post_type, array $view_params): AttachmentData
    {
        $notify_theme_data = app(Get::class)->execute($post_type, 'pdf', $view_params);
        $html = $notify_theme_data->body_html;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
        $file_name = Str::slug($notify_theme_data->subject) . '.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        Assert::string($file_name, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
>>>>>>> 3f39ac8b (.)
        $file_name = Str::slug($notify_theme_data->subject).'.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        Assert::string($file_name, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
=======
>>>>>>> 95531e1 (.)
        $file_name = Str::slug($notify_theme_data->subject) . '.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        Assert::string($file_name, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $file_path = Storage::disk('cache')->path($file_name);

        HtmlService::toPdf(
            filename: $file_path,
            html: $html,
            out: 'file',
            pdforientation: 'P',
        );

        return AttachmentData::from([
            'path' => $file_path,
            'as' => $file_name,
            'mime' => 'application/pdf',
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $file_name = Str::slug($notify_theme_data->subject).'.pdf';
=======
        $file_name = Str::slug($notify_theme_data->subject) . '.pdf';
>>>>>>> b93ef594b4 (.)
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        Assert::string($file_name, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $file_path = Storage::disk('cache')->path($file_name);

        HtmlService::toPdf(
            filename: $file_path,
            html: $html,
            out: 'file',
            pdforientation: 'P',
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        return AttachmentData::from([
            'path' => $file_path,
            'as' => $file_name,
            'mime' => 'application/pdf',
        ]);
>>>>>>> b93ef594b4 (.)
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
>>>>>>> 3f39ac8b (.)
=======
        $file_name = Str::slug($notify_theme_data->subject).'.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        Assert::string($file_name);
        $file_path = Storage::disk('cache')->path($file_name);

        HtmlService::toPdf(filename: $file_path, html: $html, out: 'file', pdforientation: 'P');

        return AttachmentData::from(
            [
                'path' => $file_path,
                'as' => $file_name,
                'mime' => 'application/pdf',
            ]
        );
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
    }
}
