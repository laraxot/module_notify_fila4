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
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        if (!isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (!isset($view_params['lang'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
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
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            $view_params['lang'] = app()->getLocale();
        }

        $theme = NotifyTheme::firstOrCreate(
            [
                'lang' => $view_params['lang'],
                'type' => $type, // email,sms,whatsapp,piccione
                'post_type' => $name,
                'post_id' => $view_params['post_id'], // in questo caso il tipo come register type 3 in cui la pwd e' solo autogenerata
            ],
            ['view_params' => []],
        );

        $module_name_low = Str::lower($xotData->main_module);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        /* @phpstan-ignore-next-line property.notFound */
        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
=======
>>>>>>> f5f1cb1 (.)
            $theme->update(['subject' => $subject]);
        }

        /* @phpstan-ignore-next-line property.notFound */
        if ($theme->theme === null) {
            $theme->update(['theme' => 'ark']);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> e6ac118 (.)
        if ($theme->body_html === null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $bodyHtml = $theme->attributes['body_html'] ?? null;
        if ($bodyHtml === null) {
>>>>>>> 7aba3dd (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
=======
>>>>>>> ab15d0e (.)
        if ($theme->body_html === null) {
>>>>>>> a80c61f (.)
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod.'.body_html')) {
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> e11621f (.)
=======
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
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> f5f1cb1 (.)
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

            $view_params['logo'] =
<<<<<<< HEAD
                '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
=======
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';
>>>>>>> 99ff506 (.)

            // $view_params['logo'] = '<img src="'.\Request::getSchemeAndHttpHost().'/uploads/6/logo_VERITAS_piccolo.png" width="' . $theme->logo['width'] . ' "height="' . $theme->logo['height'] . '" />';
        }

        // dddx([$theme, $view_params]);

        foreach ($view_params as $k => $v) {
            if (is_string($v)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> e11621f (.)
=======
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
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> f5f1cb1 (.)
            }
        }

        $view_params['body_html'] = $body_html;
        // $view_params['logo'] = $theme->logo;
        if (empty($theme->view_params)) {
            $theme->update(['view_params' => $view_params]);
        }

        return NotifyThemeData::from([
            /* @phpstan-ignore-next-line property.notFound */
            'from_email' => $theme->from_email,
            /* @phpstan-ignore-next-line property.notFound */
            'from' => $theme->from,
            'subject' => $subject,
            'body_html' => $body_html,
            'view_params' => $view_params,
        ]);
    }
}
