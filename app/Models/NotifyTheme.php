<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Eloquent;
>>>>>>> 82c6772 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\BaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * Modules\Notify\Models\NotifyTheme.
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
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
 * @property Model $linkable
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 * @property Model|Eloquent $linkable
>>>>>>> 82c6772 (.)
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
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
<<<<<<< HEAD
 *
 * @mixin \Eloquent
 *
=======
>>>>>>> 6ba141fc (.)
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
 */
class NotifyTheme extends BaseModel implements HasMedia
=======
=======
>>>>>>> 82c6772 (.)
 *
=======
<<<<<<< HEAD
=======
=======
 * @property Model|\Eloquent $linkable
 * @property MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null $media_count
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereBodyHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereLogoWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyTheme whereViewParams($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @mixin \Eloquent
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyTheme whereDeletedBy($value)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
 * @mixin IdeHelperNotifyTheme
 * @mixin Eloquent
 */
class NotifyTheme extends BaseModel
>>>>>>> 6ba141fc (.)
{
    use InteractsWithMedia;
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

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

<<<<<<< HEAD
    /**
     * @return array{path: string, width: int, height: int}
     */
    public function getLogoAttribute(): array
=======
    /** @var list<string> */
    protected $appends = [
        'logo',
    ];

<<<<<<< HEAD
    public function getLogoAttribute(?array $value): array
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
=======
<<<<<<< HEAD
    public function getLogoAttribute(null|array $value): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLogoAttribute(null|array $value): array
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> a12f125f4a (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> b93ef594b4 (.)
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
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
=======
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
=======
>>>>>>> origin/develop

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            // 'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> 82c6772 (.)
            'view_params' => 'array',
        ];
    }
}
