<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
>>>>>>> 9777d1b3 (.)
=======
use Override;
=======
=======
use Override;
=======
>>>>>>> d09cb759 (.)
=======
use Override;
=======
>>>>>>> d09cb759 (.)
=======
use Override;
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Override;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Override;
>>>>>>> 2941b0bd (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
use Eloquent;
>>>>>>> f1c9518b (.)
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Modules\Xot\Contracts\ProfileContract;
use Override;
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Override;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
 * @property Model|Eloquent $linkable
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
>>>>>>> f1c9518b (.)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin Eloquent
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
<<<<<<< HEAD
=======
 *
=======
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin Eloquent
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
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
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
 * @mixin IdeHelperNotifyTheme
 * @mixin Eloquent
 */
<<<<<<< HEAD
=======
/**
 * @property string $id
 * @property string|null $lang
 * @property string|null $type
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $from
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $body_html
 * @property string|null $theme
 * @property string|null $from_email
 * @property string|null $logo_src
 * @property int|null $logo_width
 * @property int|null $logo_height
 * @property array<array-key, mixed>|null $view_params
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read array<string, mixed> $logo
 * @property-read Model|\Eloquent|null $linkable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Notify\Database\Factories\NotifyThemeFactory factory($count = null, $state = [])
 * @method static Builder<static>|NotifyTheme newModelQuery()
 * @method static Builder<static>|NotifyTheme newQuery()
 * @method static Builder<static>|NotifyTheme query()
 * @method static Builder<static>|NotifyTheme whereBody($value)
 * @method static Builder<static>|NotifyTheme whereBodyHtml($value)
 * @method static Builder<static>|NotifyTheme whereCreatedAt($value)
 * @method static Builder<static>|NotifyTheme whereCreatedBy($value)
 * @method static Builder<static>|NotifyTheme whereDeletedAt($value)
 * @method static Builder<static>|NotifyTheme whereDeletedBy($value)
 * @method static Builder<static>|NotifyTheme whereFrom($value)
 * @method static Builder<static>|NotifyTheme whereFromEmail($value)
 * @method static Builder<static>|NotifyTheme whereId($value)
 * @method static Builder<static>|NotifyTheme whereLang($value)
 * @method static Builder<static>|NotifyTheme whereLogoHeight($value)
 * @method static Builder<static>|NotifyTheme whereLogoSrc($value)
 * @method static Builder<static>|NotifyTheme whereLogoWidth($value)
 * @method static Builder<static>|NotifyTheme wherePostId($value)
 * @method static Builder<static>|NotifyTheme wherePostType($value)
 * @method static Builder<static>|NotifyTheme whereSubject($value)
 * @method static Builder<static>|NotifyTheme whereTheme($value)
 * @method static Builder<static>|NotifyTheme whereType($value)
 * @method static Builder<static>|NotifyTheme whereUpdatedAt($value)
 * @method static Builder<static>|NotifyTheme whereUpdatedBy($value)
 * @method static Builder<static>|NotifyTheme whereViewParams($value)
 *
 * @mixin Eloquent
 */
>>>>>>> 2cbbc069 (.)
class NotifyTheme extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'lang',
        'type',
        'subject',
        'body',
        'body_html',
        'from',
        'from_email',
        'post_type',
        'post_id',
        'theme',
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
    ];

    /** @var list<string> */
    protected $appends = [
        'logo',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
    public function getLogoAttribute(null|array $value): array
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 9777d1b3 (.)
=======
    public function getLogoAttribute(null|array $value): array
=======
=======
    public function getLogoAttribute(null|array $value): array
=======
>>>>>>> d09cb759 (.)
=======
    public function getLogoAttribute(null|array $value): array
=======
>>>>>>> d09cb759 (.)
=======
    public function getLogoAttribute(null|array $value): array
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 3f537838 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 3f537838 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
    public function getLogoAttribute(?array $value): array
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
    public function getLogoAttribute(null|array $value): array
=======
    public function getLogoAttribute(?array $value): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    public function getLogoAttribute(null|array $value): array
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
    #[Override]
=======
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
>>>>>>> 2941b0bd (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    #[Override]
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    #[Override]
>>>>>>> 98d837b9 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 3f537838 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 3f537838 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 98d837b9 (.)
            // 'published_at' => 'datetime:Y-m-d', // da verificare
            'view_params' => 'array',
        ];
    }
}
