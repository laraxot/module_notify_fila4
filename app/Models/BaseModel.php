<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Traits\Updater;
use Modules\Xot\Traits\Updater;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Base Model for Notify module.
 *
 * Extends XotBaseModel and adds:
 * - Spatie Media Library support (HasMedia, InteractsWithMedia)
 *
 * @see \Modules\Xot\Models\XotBaseModel
 */
abstract class BaseModel extends XotBaseModel implements HasMedia
{
    use \Modules\Xot\Models\Traits\HasXotFactory;
    use \Modules\Xot\Models\Traits\HasXotFactory;
    use InteractsWithMedia;
abstract class BaseModel extends Model implements HasMedia
{
    // use Searchable;
    use HasFactory;
abstract class BaseModel extends XotBaseModel implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The connection name for the model.
     *
     * @var string
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'notify';


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

   
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    /**
     * Create a new factory instance for the model.
     *
    /**
     * Create a new factory instance for the model.
     *
    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
   


    /** @return array<string, string> */
    protected function casts(): array
    {


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
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'verified_at' => 'datetime', // ✅ Notify-specific cast
        ]);
    protected $connection = 'notify';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'verified_at' => 'datetime', // ✅ Notify-specific cast
        ]);
    protected $connection = 'notify';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'verified_at' => 'datetime', // ✅ Notify-specific cast
        ]);
    }
}
