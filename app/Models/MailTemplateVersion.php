<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Carbon\Carbon;
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
 *
 * @mixin IdeHelperMailTemplateVersion
 * @mixin \Eloquent
 */
class MailTemplateVersion extends BaseModel
{
    use SoftDeletes;
    use Updater;

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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
