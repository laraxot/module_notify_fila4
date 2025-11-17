<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

// use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Carbon\Carbon;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

/**
 * @property int $id
 * @property string $mailable
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property int $version
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property string $name
 * @property string $slug
 * @property Collection<int, MailTemplateVersion> $versions
 * @property Collection<int, MailTemplateLog> $logs
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property string $name
 * @property string $slug
 * @property array $variables
 * @property mixed $translations
 * @property string|null $params
 * @property array<array-key, mixed>|null $sms_template
 * @property int $counter
 *
 * @mixin \Eloquent
 */
class MailTemplate extends SpatieMailTemplate implements MailTemplateInterface
{
    use HasSlug;

    // use SoftDeletes;
    use HasTranslations;

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];

    /** @var list<string> */
    protected $fillable = [
        'mailable',
        'name',
        'slug',
        'subject',
        'html_template',
        'text_template',
        'sms_template',
        // 'version',  //under development
        'params',
        'counter',
    ];

    protected $attributes = [
        'mailable' => 'Modules\Notify\Emails\SpatieEmail',
    ];

    /**
     * Define attribute casts.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function scopeForMailable(Builder $query, Mailable $mailable): Builder
    {
        if (! method_exists($mailable, 'getSlug')) {
            throw new \Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
        }
        $slug = $mailable->getSlug();

        return $query->where('mailable', get_class($mailable))->where('slug', $slug);
    }

    /*
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>
     *
     * public function versions(): HasMany
     * {
     * return $this->hasMany(MailTemplateVersion::class, 'template_id')
     * ->orderByDesc('version');
     * }
     *
     * public function logs(): HasMany
     * {
     * return $this->hasMany(MailTemplateLog::class, 'template_id');
     * }
     *
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
     * public function createNewVersion(string $createdBy, ?string $notes = null): self
     * {
     * $this->versions()->create([
     * 'mailable' => $this->mailable,
     * 'subject' => $this->subject,
     * 'html_template' => $this->html_template,
     * 'text_template' => $this->text_template,
     * 'version' => $this->version,
     * 'created_by' => $createdBy,
     * 'change_notes' => $notes,
     * ]);
     *
     * $this->increment('version');
     * return $this;
     * }
     */
}
