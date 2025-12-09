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
=======
>>>>>>> 82ae73be (.)
            'title' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.title'),
            'body' => trans($main_module . '::notifications.' . mb_strtoupper($type) . '.body'),
=======
            'title' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.title'),
            'body' => trans($main_module.'::notifications.'.mb_strtoupper($type).'.body'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
