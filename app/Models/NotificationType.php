<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
class NotificationType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
