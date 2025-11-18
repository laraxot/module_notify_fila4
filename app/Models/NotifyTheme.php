<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 8bc2fc9f (first)
=======
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> 20a3d3b (.)
use Modules\Xot\Models\BaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\MediaLibrary\MediaCollections\Models\Media;
=======
>>>>>>> 8bc2fc9f (first)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Media;
>>>>>>> 20a3d3b (.)

/**
 * Modules\Notify\Models\NotifyTheme.
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string|null $created_by
=======
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
>>>>>>> 8bc2fc9f (first)
=======
 * @property string|null $created_by
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Model|Eloquent $linkable
=======
>>>>>>> 8bc2fc9f (first)
=======
 * @property Model|Eloquent $linkable
>>>>>>> 20a3d3b (.)
 * @property Model $linkable
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @method static NotifyThemeFactory factory($count = null, $state = [])
 * @method static Builder|NotifyTheme newModelQuery()
 * @method static Builder|NotifyTheme newQuery()
 * @method static Builder|NotifyTheme query()
 * @method static Builder|NotifyTheme whereBody($value)
 * @method static Builder|NotifyTheme whereBodyHtml($value)
 * @method static Builder|NotifyTheme whereCreatedAt($value)
 * @method static Builder|NotifyTheme whereCreatedBy($value)
 * @method static Builder|NotifyTheme whereFrom($value)
 * @method static Builder|NotifyTheme whereFromEmail($value)
 * @method static Builder|NotifyTheme whereId($value)
 * @method static Builder|NotifyTheme whereLang($value)
 * @method static Builder|NotifyTheme whereLogoHeight($value)
 * @method static Builder|NotifyTheme whereLogoSrc($value)
 * @method static Builder|NotifyTheme whereLogoWidth($value)
 * @method static Builder|NotifyTheme wherePostId($value)
 * @method static Builder|NotifyTheme wherePostType($value)
 * @method static Builder|NotifyTheme whereSubject($value)
 * @method static Builder|NotifyTheme whereTheme($value)
 * @method static Builder|NotifyTheme whereType($value)
 * @method static Builder|NotifyTheme whereUpdatedAt($value)
 * @method static Builder|NotifyTheme whereUpdatedBy($value)
 * @method static Builder|NotifyTheme whereViewParams($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
 * @mixin \Eloquent
 *
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin \Eloquent
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
=======
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
=======
 * @mixin \Eloquent
>>>>>>> 20a3d3b (.)
 */
class NotifyTheme extends BaseModel implements HasMedia
{
    use \Modules\Xot\Models\Traits\HasXotFactory;
    use InteractsWithMedia;
<<<<<<< HEAD
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLogoAttribute(?array $value): array
=======
    public function getLogoAttribute(): array
>>>>>>> 8bc2fc9f (first)
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            // 'published_at' => 'datetime:Y-m-d', // da verificare
=======
>>>>>>> 8bc2fc9f (first)
=======
            // 'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> 20a3d3b (.)
            'view_params' => 'array',
        ];
    }
}
