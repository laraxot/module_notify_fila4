<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Modules\Xot\Models\Traits\HasXotFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Xot\Models\BaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Modules\Notify\Models\NotifyTheme.
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $body_html
 * @property string|null $theme
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property array $view_params
 * @property array $logo
 * @property Model|Eloquent $linkable
 * @property Model $linkable
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
 * @mixin \Eloquent
 *
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use HasXotFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'lang',
        'type',
        'subject',
        'body',
        'from',
        'post_type',
        'post_id',
        'body_html',
        'theme',
        'from_email',
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
    ];

    /**
     * @return array{path: string, width: int, height: int}
     */
    public function getLogoAttribute(?array $value): array
    {
        return [
            // 'path' => asset(strval($this->logo_src)),
            'path' => url($this->getFirstMediaUrl()),
            'width' => $this->logo_width ?? 50,
            'height' => $this->logo_height ?? 50,
        ];
    }

    /**
     * Get the parent linkable model (user or post).
     */
    public function linkable(): MorphTo
    {
        return $this->morphTo('post');
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
            // 'published_at' => 'datetime:Y-m-d', // da verificare
            'view_params' => 'array',
        ];
    }
}
