<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Modules\Xot\Models\XotBaseModel;
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
