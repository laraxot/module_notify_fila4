<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Modules\Xot\Models\BaseModel;

/**
 * Notification model for the Notify module.
 *
 * @property string $id
 * @property string $type
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property array<string, mixed>|string $data
 * @property Carbon|null $read_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property int|null $tenant_id
 * @property int|null $user_id
 * @property string|null $subject_type
 * @property int|null $subject_id
 * @property array<string>|string|null $channels
 * @property string|null $status
 * @property Carbon|null $sent_at
 *
 * @property-read Model|null $creator
 * @property-read Model|null $updater
 *
 * @mixin IdeHelperNotification
 * @mixin \Eloquent
 */
class Notification extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'message',
        'type',
        'read_at',
        'tenant_id',
        'user_id',
        'subject_type',
        'subject_id',
        'channels',
        'status',
        'sent_at',
        'data',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
            'sent_at' => 'datetime',
            'data' => 'array',
            'channels' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
