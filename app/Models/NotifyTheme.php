<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

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
>>>>>>> 75179b8 (.)
=======
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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

=======
=======
>>>>>>> 7148d73 (.)
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
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
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin Eloquent
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
 * @mixin IdeHelperNotifyTheme
 * @mixin Eloquent
 */
class NotifyTheme extends BaseModel
{
    /** @var list<string> */
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    protected $fillable = [
        'id',
        'lang',
        'type',
        'subject',
        'body',
<<<<<<< HEAD
<<<<<<< HEAD
        'from',
        'post_type',
        'post_id',
        'body_html',
        'theme',
        'from_email',
=======
=======
>>>>>>> 7148d73 (.)
        'body_html',
        'from',
        'from_email',
        'post_type',
        'post_id',
        'theme',
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array{path: string, width: int, height: int}
     */
    public function getLogoAttribute(?array $value): array
=======
=======
>>>>>>> 7148d73 (.)
    /** @var list<string> */
    protected $appends = [
        'logo',
    ];

    public function getLogoAttribute(null|array $value): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    #[Override]
>>>>>>> 9777d1b (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
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
