<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder<static>|NotificationType newModelQuery()
 * @method static Builder<static>|NotificationType newQuery()
 * @method static Builder<static>|NotificationType query()
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
