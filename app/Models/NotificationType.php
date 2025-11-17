<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
class NotificationType extends BaseModel
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
