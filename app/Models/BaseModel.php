<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model implements HasMedia
{
    // use Searchable;
<<<<<<< HEAD
<<<<<<< HEAD
    use \Modules\Xot\Models\Traits\HasXotFactory;
=======
    use HasFactory;
>>>>>>> 6ba141fc (.)
=======
    use \Modules\Xot\Models\Traits\HasXotFactory;
>>>>>>> 5e14ac3 (.)
    use InteractsWithMedia;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
   
=======
    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
>>>>>>> 6ba141fc (.)
=======
   
>>>>>>> 5e14ac3 (.)

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            'verified_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
