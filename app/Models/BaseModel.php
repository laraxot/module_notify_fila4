<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 99ff506 (.)
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 05bc3ad (.)
use Modules\Xot\Traits\Updater;
=======
use Modules\Xot\Models\XotBaseModel;
>>>>>>> a80c61f (.)
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
    use InteractsWithMedia;

    /**
     * The connection name for the model.
     *
     * @var string
     */
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
