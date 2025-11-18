<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
class NotificationType extends BaseModel
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

=======
>>>>>>> 20a3d3b (.)
/**
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class NotificationType extends Model
>>>>>>> 8bc2fc9f (first)
=======
class NotificationType extends BaseModel
>>>>>>> 20a3d3b (.)
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
