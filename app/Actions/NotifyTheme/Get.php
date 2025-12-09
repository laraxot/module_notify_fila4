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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
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
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2effe245 (.)
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (!isset($view_params['lang'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 82ae73be (.)
=======
        if (! isset($view_params['post_id'])) {
            $view_params['post_id'] = 0;
        }
        if (! isset($view_params['lang'])) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            ['view_params' => []],
=======
            ['view_params' => []]
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
=======
            ['view_params' => []],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            ['view_params' => []],
>>>>>>> 9777d1b3 (.)
=======
            ['view_params' => []],
=======
=======
            ['view_params' => []],
=======
>>>>>>> d09cb759 (.)
=======
            ['view_params' => []],
=======
>>>>>>> d09cb759 (.)
=======
            ['view_params' => []],
=======
>>>>>>> 4689a827 (.)
=======
            ['view_params' => []],
=======
>>>>>>> f2e64178 (.)
=======
            ['view_params' => []],
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            ['view_params' => []],
>>>>>>> 3f537838 (.)
=======
            ['view_params' => []],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            ['view_params' => []],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            ['view_params' => []],
>>>>>>> 3f537838 (.)
=======
            ['view_params' => []],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            ['view_params' => []],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            ['view_params' => []],
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            ['view_params' => []],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            ['view_params' => []],
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            ['view_params' => []],
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            ['view_params' => []],
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
            ['view_params' => []],
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
            ['view_params' => []],
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
            ['view_params' => []],
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;
>>>>>>> f1c9518b (.)

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> a335025b (rebase 210)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> e00d798d (.)
        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f1c9518b (.)
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
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
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        $trad_mod = $module_name_low . '::' . $type . '.' . $name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod . '.subject');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 82ae73be (.)
=======
        $trad_mod = $module_name_low.'::'.$type.'.'.$name;

        if ($theme->subject === null) {
            $subject = trans($trad_mod.'.subject');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
            $theme->update(['subject' => $subject]);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> a335025b (rebase 210)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> e00d798d (.)
=======
            $theme->update(['subject' => $subject]);
        }

>>>>>>> 75179b85 (.)
        if ($theme->theme === null) {
            $theme->update(['theme' => 'ark']);
        }

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
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> e6ac118 (.)
=======
>>>>>>> e6c7fb3 (.)
>>>>>>> 54220b28 (rebase 210)
        if ($theme->body_html === null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
=======
        /* @phpstan-ignore-next-line property.notFound */
=======
>>>>>>> 5fd545e4 (.)
        if ($theme->body_html === null) {
>>>>>>> 2cbbc069 (.)
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
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
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 9777d1b3 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
>>>>>>> d09cb759 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
>>>>>>> d09cb759 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 3f537838 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 3f537838 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
        $bodyHtml = $theme->attributes['body_html'] ?? null;
        if ($bodyHtml === null) {
>>>>>>> 7aba3dd (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
        if ($theme->body_html === null) {
>>>>>>> a80c61f (.)
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
=======
        $bodyHtml = $theme->attributes['body_html'] ?? null;
        if ($bodyHtml === null) {
>>>>>>> 2cf1e9d (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
        if ($theme->body_html === null) {
>>>>>>> 4c59e64 (.)
>>>>>>> a335025b (rebase 210)
=======
        /* @phpstan-ignore-next-line property.notFound */
        if ($theme->body_html === null) {
>>>>>>> e00d798d (.)
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod.'.body_html')) {
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod.'.body_html')) {
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        if ($theme->body_html === null) {
<<<<<<< HEAD
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod.'.body_html')) {
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        if ($theme->body_html === null) {
<<<<<<< HEAD
            $html = trans($trad_mod . '.body_html');
            if (isset($view_params['body_html']) && $html === ($trad_mod . '.body_html')) {
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            $html = trans($trad_mod.'.body_html');
            if (isset($view_params['body_html']) && $html === $trad_mod.'.body_html') {
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
            $view_params['logo'] =
<<<<<<< HEAD
<<<<<<< HEAD
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';
=======
<<<<<<< HEAD
                '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
=======
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
                '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
=======
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
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
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

<<<<<<< HEAD
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 2effe245 (.)
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

<<<<<<< HEAD
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

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
>>>>>>> b93ef594b4 (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 3f537838 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 75179b85 (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> ce89c8bb (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 3f537838 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 75179b85 (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 3f537838 (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 2941b0bd (.)
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
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
=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

>>>>>>> 75179b85 (.)
=======
            $view_params['logo'] =
                '<img src="' . $logoPath . '" width="' . $logoWidth . '" height="' . $logoHeight . '" />';

=======
            $view_params['logo'] = '<img src="'.$logoPath.'" width="'.$logoWidth.'" height="'.$logoHeight.'" />';
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
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
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 9777d1b3 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
>>>>>>> d09cb759 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
>>>>>>> d09cb759 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
>>>>>>> 4689a827 (.)
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
=======
<<<<<<< HEAD
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 3f537838 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 3f537838 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
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
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
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
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> d45a0226 (.)
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
=======
                $body_html = (string) Str::replace('##'.$k.'##', $v, (string) $body_html);
                $subject = (string) Str::replace('##'.$k.'##', $v, (string) $subject);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
                $body_html = (string) Str::replace('##' . $k . '##', $v, (string) $body_html);
                $subject = (string) Str::replace('##' . $k . '##', $v, (string) $subject);
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
=======
>>>>>>> d09cb759 (.)
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
>>>>>>> b93ef594b4 (.)
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
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        return NotifyThemeData::from([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'from_email' => $theme->from_email,
=======
            /* @phpstan-ignore-next-line property.notFound */
            'from_email' => $theme->from_email,
            /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 2cbbc069 (.)
=======
            'from_email' => $theme->from_email,
>>>>>>> 5fd545e4 (.)
=======
            /* @phpstan-ignore-next-line property.notFound */
            'from_email' => $theme->from_email,
            /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 7c1c276f (rebase 210)
=======
            'from_email' => $theme->from_email,
>>>>>>> 54220b28 (rebase 210)
=======
            /* @phpstan-ignore-next-line property.notFound */
            'from_email' => $theme->from_email,
            /* @phpstan-ignore-next-line property.notFound */
>>>>>>> a335025b (rebase 210)
=======
            /* @phpstan-ignore-next-line property.notFound */
            'from_email' => $theme->from_email,
            /* @phpstan-ignore-next-line property.notFound */
>>>>>>> e00d798d (.)
=======
=======
>>>>>>> 82ae73be (.)
        return NotifyThemeData::from([
            'from_email' => $theme->from_email,
>>>>>>> 75179b85 (.)
            'from' => $theme->from,
            'subject' => $subject,
            'body_html' => $body_html,
            'view_params' => $view_params,
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
    }
}
