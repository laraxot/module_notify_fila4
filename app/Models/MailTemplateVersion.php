<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
use Carbon\Carbon;
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use RuntimeException;
=======
>>>>>>> f1c9518b (.)
use Carbon\Carbon;
use Modules\User\Models\Profile;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
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
use RuntimeException;
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> b19cd40 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateVersionFactory;
>>>>>>> 75cb51873 (.)
use Illuminate\Database\Eloquent\Builder;
=======
=======
use RuntimeException;
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> a12f125f4a (.)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use RuntimeException;
use Carbon\Carbon;
use Modules\User\Models\Profile;
>>>>>>> b93ef594b4 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateVersionFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateVersionFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Traits\Updater;
<<<<<<< HEAD
use Override;
use RuntimeException;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
<<<<<<< HEAD
=======
use Override;
use RuntimeException;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use RuntimeException;
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateVersionFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Xot\Traits\Updater;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)

/**
 * @property int $id
 * @property int $mail_template_id
 * @property int $version
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property array|null $metadata
 * @property string|null $created_by
 * @property string|null $change_notes
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property-read ProfileContract|null $creator
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read MailTemplate|null $template
<<<<<<< HEAD
 * @property-read ProfileContract|null $updater
 *
=======
 * @property-read Profile|null $updater
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
 * @method static MailTemplateVersionFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateVersion newModelQuery()
 * @method static Builder<static>|MailTemplateVersion newQuery()
 * @method static Builder<static>|MailTemplateVersion onlyTrashed()
 * @method static Builder<static>|MailTemplateVersion query()
 * @method static Builder<static>|MailTemplateVersion whereChangeNotes($value)
 * @method static Builder<static>|MailTemplateVersion whereCreatedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereCreatedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereDeletedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereDeletedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereHtmlTemplate($value)
 * @method static Builder<static>|MailTemplateVersion whereId($value)
 * @method static Builder<static>|MailTemplateVersion whereMailTemplateId($value)
 * @method static Builder<static>|MailTemplateVersion whereMetadata($value)
 * @method static Builder<static>|MailTemplateVersion whereSubject($value)
 * @method static Builder<static>|MailTemplateVersion whereTextTemplate($value)
 * @method static Builder<static>|MailTemplateVersion whereUpdatedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereUpdatedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereVersion($value)
 * @method static Builder<static>|MailTemplateVersion withTrashed()
 * @method static Builder<static>|MailTemplateVersion withoutTrashed()
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
=======
=======
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\User\Models\Profile|null $updater
 * @method static \Modules\Notify\Database\Factories\MailTemplateVersionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereChangeNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereHtmlTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereMailTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereTextTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion whereVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateVersion withoutTrashed()
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)
=======
=======
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
 * @mixin IdeHelperMailTemplateVersion
 *
 * @property-read ProfileContract|null $deleter
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7c1c276f (rebase 210)
/**
 * @property string $id
 * @property int $mail_template_id
 * @property int $version
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property array<array-key, mixed>|null $metadata
 * @property string|null $created_by
 * @property string|null $change_notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 7c1c276f (rebase 210)
 * @method static \Modules\Notify\Database\Factories\MailTemplateVersionFactory factory($count = null, $state = [])
 * @method static Builder<static>|MailTemplateVersion newModelQuery()
 * @method static Builder<static>|MailTemplateVersion newQuery()
 * @method static Builder<static>|MailTemplateVersion onlyTrashed()
 * @method static Builder<static>|MailTemplateVersion query()
 * @method static Builder<static>|MailTemplateVersion whereChangeNotes($value)
 * @method static Builder<static>|MailTemplateVersion whereCreatedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereCreatedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereDeletedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereDeletedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereHtmlTemplate($value)
 * @method static Builder<static>|MailTemplateVersion whereId($value)
 * @method static Builder<static>|MailTemplateVersion whereMailTemplateId($value)
 * @method static Builder<static>|MailTemplateVersion whereMetadata($value)
 * @method static Builder<static>|MailTemplateVersion whereSubject($value)
 * @method static Builder<static>|MailTemplateVersion whereTextTemplate($value)
 * @method static Builder<static>|MailTemplateVersion whereUpdatedAt($value)
 * @method static Builder<static>|MailTemplateVersion whereUpdatedBy($value)
 * @method static Builder<static>|MailTemplateVersion whereVersion($value)
 * @method static Builder<static>|MailTemplateVersion withTrashed(bool $withTrashed = true)
 * @method static Builder<static>|MailTemplateVersion withoutTrashed()
<<<<<<< HEAD
 *
 * @mixin \Eloquent
 */
>>>>>>> 2cbbc069 (.)
=======
 * @mixin \Eloquent
 */
>>>>>>> 7c1c276f (rebase 210)
class MailTemplateVersion extends BaseModel
{
    use SoftDeletes, Updater;

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
    protected $fillable = [
        'template_id',
        'mailable',
        'subject',
        'html_template',
        'text_template',
        'version',
        'created_by',
        'change_notes',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
    #[Override]
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
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
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
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function restore(): MailTemplate
    {
        $template = $this->template;

        if ($template === null) {
<<<<<<< HEAD
            throw new RuntimeException('Template non trovato per questa versione');
=======
<<<<<<< HEAD
            throw new RuntimeException('Template non trovato per questa versione');
=======
            throw new \RuntimeException('Template non trovato per questa versione');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        $template->update([
            /* @phpstan-ignore-next-line property.notFound */
            'subject' => $this->subject,
            /* @phpstan-ignore-next-line property.notFound */
            'html_template' => $this->html_template,
            /* @phpstan-ignore-next-line property.notFound */
            'text_template' => $this->text_template,
        ]);

        /** @var MailTemplate */
        return $template;
    }
}
