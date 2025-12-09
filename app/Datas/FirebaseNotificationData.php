<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\LaravelData\Data;

class FirebaseNotificationData extends Data
{
    public string $type; // ' => $data['type'],

    public string $title; // ' => $data['title'],

    public string $body; // ' => $data['body'],

    public array $data; // ' => json_encode($data['data']),

    public static function fromType(string $type): self
    {
        $main_module = Str::of(XotData::make()->main_module)->lower()->toString();
        $data = [
            'type' => $type,
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
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 9777d1b3 (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
>>>>>>> a12f125f4a (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> b93ef594b4 (.)
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 3f537838 (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            'data' => [],
        ];

        return self::from($data);
    }
}
