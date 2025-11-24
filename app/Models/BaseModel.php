<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Models\XotBaseModel;
=======
=======
>>>>>>> 7148d73 (.)
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
abstract class BaseModel extends XotBaseModel implements HasMedia
{
    use InteractsWithMedia;
=======
=======
>>>>>>> 7148d73 (.)
abstract class BaseModel extends Model implements HasMedia
{
    // use Searchable;
    use HasFactory;
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

    /** @var string */
    protected $connection = 'notify';

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
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

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
            'verified_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
