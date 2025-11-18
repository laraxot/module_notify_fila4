<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Carbon\Carbon;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Media\Models\Media;
use Modules\User\Models\Profile;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * @property int                         $id
 * @property int                         $mail_template_id
 * @property int                         $version
 * @property string|null                 $subject
 * @property string                      $html_template
 * @property string|null                 $text_template
 * @property array|null                  $metadata
 * @property string|null                 $created_by
 * @property string|null                 $change_notes
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @property Carbon|null                 $deleted_at
 * @property string|null                 $updated_by
 * @property string|null                 $deleted_by
 * @property Profile|null                $creator
 * @property MediaCollection<int, Media> $media
 * @property int|null                    $media_count
 * @property MailTemplate|null           $template
 * @property Profile|null                $updater
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\MailTemplateVersionFactory;
use Modules\User\Models\Profile;
use Modules\Xot\Traits\Updater;
use RuntimeException;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property-read Profile|null $creator
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read MailTemplate|null $template
 * @property-read Profile|null $updater
 *
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
>>>>>>> 8bc2fc9f (first)
 *
 * @mixin IdeHelperMailTemplateVersion
 * @mixin \Eloquent
 */
class MailTemplateVersion extends BaseModel
{
<<<<<<< HEAD
    use SoftDeletes;
    use Updater;
=======
    use SoftDeletes, Updater;
>>>>>>> 8bc2fc9f (first)

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

<<<<<<< HEAD
    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function restore(): bool
    {
        $template = $this->template;

        if (null === $template) {
            throw new \RuntimeException('Template non trovato per questa versione');
        }

        $template->subject = $this->subject;
        $template->html_template = $this->html_template;
        $template->text_template = $this->text_template;
        $template->save();

        return parent::restore();
    }

=======
>>>>>>> 8bc2fc9f (first)
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 8bc2fc9f (first)
    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
<<<<<<< HEAD
=======

    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function restore(): MailTemplate
    {
        $template = $this->template;

        if ($template === null) {
            throw new RuntimeException('Template non trovato per questa versione');
        }

        $template->update([
            'subject' => $this->subject,
            'html_template' => $this->html_template,
            'text_template' => $this->text_template,
        ]);

        return $template;
    }
>>>>>>> 8bc2fc9f (first)
}
