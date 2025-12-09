<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\NotifyTheme;

use Illuminate\Support\Str;
use Modules\Notify\Datas\NotifyThemeData;
use Modules\Notify\Models\NotifyTheme;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;

/**
 * -- buildmailmessage ha troppi pezzi simili ..
 */
class Get
{
    use QueueableAction;

    public function execute(string $name, string $type, array $view_params): NotifyThemeData
    {
        $xotData = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        if (!isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (!isset($view_params['lang'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 82ae73be (.)
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (!isset($view_params['lang'])) {
>>>>>>> b93ef594b4 (.)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            $view_params['lang'] = app()->getLocale();
        }

        $theme = NotifyTheme::firstOrCreate(
            [
                'lang' => $view_params['lang'],
                'type' => $type, // email,sms,whatsapp,piccione
                'post_type' => $name,
                'post_id' => $view_params['post_id'], // in questo caso il tipo come register type 3 in cui la pwd e' solo autogenerata
            ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
            ['view_params' => []],
=======
            ['view_params' => []]
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
            ['view_params' => []],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        );

        $module_name_low = Str::lower($xotData->main_module);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            $theme->update(['subject' => $subject]);
        }

        if ($theme->theme === null) {
            $theme->update(['theme' => 'ark']);
        }

        if ($theme->body_html === null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
                $html = '##body_html##';
            }

            $theme->update(['body_html' => $html]);
        }

        $theme_array = $theme->toArray();
        unset($theme_array['view_params']);

        $view_params = array_merge($theme_array, $view_params);

        $view_params['now'] = now()->format('d/m/Y');

        $body_html = $theme->body_html;
        $subject = $theme->subject;

        if ($theme->theme !== 'empty') {
            $view_params['logo'] = $theme->logo;
        } else {
            // Verifichiamo che i valori siano stringhe o utilizziamo valori di default
            $logoPath = '';
            $logoWidth = '100';
            $logoHeight = '100';

            if (isset($theme->logo['path']) && is_string($theme->logo['path'])) {
                $logoPath = $theme->logo['path'];
            }

            if (isset($theme->logo['width'])) {
                if (is_string($theme->logo['width'])) {
                    $logoWidth = $theme->logo['width'];
                } elseif (is_numeric($theme->logo['width'])) {
                    $logoWidth = (string) $theme->logo['width'];
                }
            }

            if (isset($theme->logo['height'])) {
                if (is_string($theme->logo['height'])) {
                    $logoHeight = $theme->logo['height'];
                } elseif (is_numeric($theme->logo['height'])) {
                    $logoHeight = (string) $theme->logo['height'];
                }
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            // $view_params['logo'] = '<img src="'.\Request::getSchemeAndHttpHost().'/uploads/6/logo_VERITAS_piccolo.png" width="' . $theme->logo['width'] . ' "height="' . $theme->logo['height'] . '" />';
        }

        // dddx([$theme, $view_params]);

        foreach ($view_params as $k => $v) {
            if (is_string($v)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            }
        }

        $view_params['body_html'] = $body_html;
        // $view_params['logo'] = $theme->logo;
        if (empty($theme->view_params)) {
            $theme->update(['view_params' => $view_params]);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        return NotifyThemeData::from([
            'from_email' => $theme->from_email,
            'from' => $theme->from,
            'subject' => $subject,
            'body_html' => $body_html,
            'view_params' => $view_params,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        return NotifyThemeData::from(
            [
                'from_email' => $theme->from_email,
                'from' => $theme->from,
                'subject' => $subject,
                'body_html' => $body_html,
                'view_params' => $view_params,
            ]
        );
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
}
