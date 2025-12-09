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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use Modules\User\Models\Profile;
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
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f1c9518b (.)
use Illuminate\Database\Eloquent\Model;
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
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
=======
=======
>>>>>>> d45a0226 (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use Modules\User\Models\Profile;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateLogFactory;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f5f1cb1 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> d45a0226 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateLogFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> 2effe245 (.)
=======
use Modules\User\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> a12f125f4a (.)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use Modules\User\Models\Profile;
use Illuminate\Database\Eloquent\Model;
>>>>>>> b93ef594b4 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateLogFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> 985c7bda (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> 2effe245 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateLogFactory;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
use Modules\User\Models\Profile;
use Override;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use Modules\User\Models\Profile;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Modules\User\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateLogFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)

/**
 * @property-read Profile|null $creator
 * @property-read Model|\Eloquent $mailable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read MailTemplate|null $template
 * @property-read Profile|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
 * @method static MailTemplateLogFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateLog newModelQuery()
 * @method static Builder<static>|MailTemplateLog newQuery()
 * @method static Builder<static>|MailTemplateLog query()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
 *
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $mailable
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\User\Models\Profile|null $updater
 * @method static \Modules\Notify\Database\Factories\MailTemplateLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog query()
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
 *
>>>>>>> 985c7bda (.)
=======
 *
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
 *
>>>>>>> fbed41ac (.)
 * @mixin IdeHelperMailTemplateLog
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
=======
/**
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
>>>>>>> 7c1c276f (rebase 210)
 * @property-read Model|\Eloquent $mailable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 7c1c276f (rebase 210)
 * @method static \Modules\Notify\Database\Factories\MailTemplateLogFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateLog newModelQuery()
 * @method static Builder<static>|MailTemplateLog newQuery()
 * @method static Builder<static>|MailTemplateLog query()
<<<<<<< HEAD
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
>>>>>>> 2cbbc069 (.)
=======
 * @mixin \Eloquent
 */
>>>>>>> 7c1c276f (rebase 210)
=======
/**
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read Model|\Eloquent $mailable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Notify\Database\Factories\MailTemplateLogFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateLog newModelQuery()
 * @method static Builder<static>|MailTemplateLog newQuery()
 * @method static Builder<static>|MailTemplateLog query()
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
>>>>>>> a335025b (rebase 210)
=======
/**
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read Model|\Eloquent $mailable
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Notify\Database\Factories\MailTemplateLogFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateLog newModelQuery()
 * @method static Builder<static>|MailTemplateLog newQuery()
 * @method static Builder<static>|MailTemplateLog query()
 * @mixin \Eloquent
 */
>>>>>>> e00d798d (.)
=======
 * @mixin IdeHelperMailTemplateLog
 * @mixin \Eloquent
 */
>>>>>>> c8b1c8bf (.)
class MailTemplateLog extends BaseModel
{
    protected $fillable = [
        'template_id',
        'mailable_type',
        'mailable_id',
        'status',
        'status_message',
        'data',
        'metadata',
        'sent_at',
        'delivered_at',
        'failed_at',
        'opened_at',
        'clicked_at',
    ];

<<<<<<< HEAD
    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function mailable(): MorphTo
    {
        return $this->morphTo();
    }

=======
>>>>>>> c8b1c8bf (.)
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
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
=======
>>>>>>> ce89c8bb (.)
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
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> fbed41ac (.)
    #[\Override]
=======
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 2effe245 (.)
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
=======
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
    #[Override]
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
    #[\Override]
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
    #[Override]
>>>>>>> c8b1c8bf (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
    protected function casts(): array
    {
        return [
            'data' => 'array',
            'metadata' => 'array',
            'sent_at' => 'datetime',
            'delivered_at' => 'datetime',
            'failed_at' => 'datetime',
            'opened_at' => 'datetime',
            'clicked_at' => 'datetime',
        ];
    }
<<<<<<< HEAD
=======

    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function mailable(): MorphTo
    {
        return $this->morphTo();
    }
>>>>>>> c8b1c8bf (.)
}
