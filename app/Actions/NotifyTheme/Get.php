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
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        if (!isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (!isset($view_params['lang'])) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
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
>>>>>>> f813254 (.)
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
            ['view_params' => []],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ['view_params' => []],
=======
            ['view_params' => []]
>>>>>>> a12f125f4a (.)
=======
            ['view_params' => []],
>>>>>>> b93ef594b4 (.)
=======
            ['view_params' => []]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        );

        $module_name_low = Str::lower($xotData->main_module);

<<<<<<< HEAD
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            $theme->update(['subject' => $subject]);
        }

        if ($theme->theme === null) {
            $theme->update(['theme' => 'ark']);
        }

        if ($theme->body_html === null) {
<<<<<<< HEAD
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod.'.body_html')) {
=======
<<<<<<< HEAD
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
>>>>>>> a12f125f4a (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> b93ef594b4 (.)
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
            $view_params['logo'] =
                '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> a12f125f4a (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> b93ef594b4 (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            // $view_params['logo'] = '<img src="'.\Request::getSchemeAndHttpHost().'/uploads/6/logo_VERITAS_piccolo.png" width="' . $theme->logo['width'] . ' "height="' . $theme->logo['height'] . '" />';
        }

        // dddx([$theme, $view_params]);

        foreach ($view_params as $k => $v) {
            if (is_string($v)) {
<<<<<<< HEAD
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
=======
<<<<<<< HEAD
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> a12f125f4a (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> b93ef594b4 (.)
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            }
        }

        $view_params['body_html'] = $body_html;
        // $view_params['logo'] = $theme->logo;
        if (empty($theme->view_params)) {
            $theme->update(['view_params' => $view_params]);
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        return NotifyThemeData::from([
            'from_email' => $theme->from_email,
            'from' => $theme->from,
            'subject' => $subject,
            'body_html' => $body_html,
            'view_params' => $view_params,
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        return NotifyThemeData::from(
            [
                'from_email' => $theme->from_email,
                'from' => $theme->from,
                'subject' => $subject,
                'body_html' => $body_html,
                'view_params' => $view_params,
            ]
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
