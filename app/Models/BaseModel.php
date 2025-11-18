<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Xot\Models\XotBaseModel;
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
>>>>>>> 8bc2fc9f (first)
use Modules\Xot\Traits\Updater;
=======
use Modules\Xot\Models\XotBaseModel;
>>>>>>> 20a3d3b (.)
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
    // use Searchable;
    use \Modules\Xot\Models\Traits\HasXotFactory;

    use SoftDeletes;
=======
abstract class BaseModel extends Model implements HasMedia
=======
abstract class BaseModel extends XotBaseModel implements HasMedia
>>>>>>> 20a3d3b (.)
{
    use InteractsWithMedia;
<<<<<<< HEAD
>>>>>>> 8bc2fc9f (first)
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
=======
>>>>>>> 20a3d3b (.)

    /** @var string */
    protected $connection = 'notify';

<<<<<<< HEAD
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
=======
   

>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
