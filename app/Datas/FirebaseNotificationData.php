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
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 9777d1b (.)
=======
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
>>>>>>> 7148d73 (.)
            'data' => [],
        ];

        return self::from($data);
    }
}
