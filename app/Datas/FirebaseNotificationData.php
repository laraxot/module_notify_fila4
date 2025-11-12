<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use function Safe\json_encode;


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
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> e11621f (.)
=======
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
>>>>>>> f813254 (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> f5f1cb1 (.)
            'data' => [],
        ];

        return self::from($data);
    }
}
