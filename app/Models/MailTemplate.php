<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Carbon\Carbon;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Exception;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
>>>>>>> 99ff506 (.)
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
<<<<<<< HEAD
=======
use Exception;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Contracts\Mail\Mailable;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

/**
<<<<<<< HEAD
 * @property int                                  $id
 * @property string                               $mailable
 * @property string|null                          $subject
 * @property string                               $html_template
 * @property string|null                          $text_template
 * @property int                                  $version
 * @property Carbon                               $created_at
 * @property Carbon                               $updated_at
 * @property Carbon|null                          $deleted_at
 * @property Collection<int, MailTemplateVersion> $versions
 * @property Collection<int, MailTemplateLog>     $logs
 * @property string|null                          $updated_by
 * @property string|null                          $created_by
 * @property string|null                          $deleted_by
 * @property string                               $name
 * @property string                               $slug
 * @property array                                $variables
 * @property mixed                                $translations
 *
=======
 * @property int $id
 * @property string $mailable
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property int $version
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection<int, MailTemplateVersion> $versions
 * @property-read Collection<int, MailTemplateLog> $logs
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property string $name
 * @property string $slug
 * @property-read array $variables
 * @property-read mixed $translations
>>>>>>> 99ff506 (.)
 * @method static Builder<static>|MailTemplate forMailable(Mailable $mailable)
 * @method static Builder<static>|MailTemplate newModelQuery()
 * @method static Builder<static>|MailTemplate newQuery()
 * @method static Builder<static>|MailTemplate query()
 * @method static Builder<static>|MailTemplate whereCreatedAt($value)
 * @method static Builder<static>|MailTemplate whereCreatedBy($value)
 * @method static Builder<static>|MailTemplate whereDeletedAt($value)
 * @method static Builder<static>|MailTemplate whereDeletedBy($value)
 * @method static Builder<static>|MailTemplate whereHtmlTemplate($value)
 * @method static Builder<static>|MailTemplate whereId($value)
 * @method static Builder<static>|MailTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|MailTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|MailTemplate whereLocale(string $column, string $locale)
 * @method static Builder<static>|MailTemplate whereLocales(string $column, array $locales)
 * @method static Builder<static>|MailTemplate whereMailable($value)
 * @method static Builder<static>|MailTemplate whereName($value)
 * @method static Builder<static>|MailTemplate whereSlug($value)
 * @method static Builder<static>|MailTemplate whereSubject($value)
 * @method static Builder<static>|MailTemplate whereTextTemplate($value)
 * @method static Builder<static>|MailTemplate whereUpdatedAt($value)
 * @method static Builder<static>|MailTemplate whereUpdatedBy($value)
<<<<<<< HEAD
 *
 * @property string|null $params
 *
 * @method static Builder<static>|MailTemplate whereParams($value)
 *
 * @property array<array-key, mixed>|null $sms_template
 * @property int                          $counter
 *
 * @method static Builder<static>|MailTemplate whereCounter($value)
 * @method static Builder<static>|MailTemplate whereSmsTemplate($value)
 *
=======
 * @property string|null $params
 * @method static Builder<static>|MailTemplate whereParams($value)
 * @property array<array-key, mixed>|null $sms_template
 * @property int $counter
 * @method static Builder<static>|MailTemplate whereCounter($value)
 * @method static Builder<static>|MailTemplate whereSmsTemplate($value)
>>>>>>> 99ff506 (.)
 * @mixin IdeHelperMailTemplate
 * @mixin \Eloquent
 */
class MailTemplate extends SpatieMailTemplate implements MailTemplateInterface
{
<<<<<<< HEAD
    use HasSlug;
    // use SoftDeletes;
    use HasTranslations;
=======
    //use SoftDeletes;
    use HasTranslations;
    use HasSlug;
>>>>>>> 99ff506 (.)

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
<<<<<<< HEAD
<<<<<<< HEAD
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];
=======
    public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
>>>>>>> b19cd40 (.)
=======
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];
>>>>>>> 4e2ebfb (.)

    /** @var list<string> */
    protected $fillable = [
        'mailable',
        'name',
        'slug',
        'subject',
        'html_template',
        'text_template',
        'sms_template',
<<<<<<< HEAD
        // 'version',  //under development
=======
        //'version',  //under development
>>>>>>> 99ff506 (.)
        'params',
        'counter',
    ];

<<<<<<< HEAD
    protected $attributes = [
        'mailable' => 'Modules\Notify\Emails\SpatieEmail',
    ];

=======
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
=======
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
>>>>>>> b19cd40 (.)
=======
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
>>>>>>> 4e2ebfb (.)
    }

    public function scopeForMailable(Builder $query, Mailable $mailable): Builder
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($mailable, 'getSlug')) {
            throw new \Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
        }
        $slug = $mailable->getSlug();

=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
        if (!method_exists($mailable, 'getSlug')) {
            throw new Exception('Il metodo getSlug() non è definito nella classe ' . $mailable::class);
        }
        $slug = $mailable->getSlug();
>>>>>>> 99ff506 (.)
        return $query->where('mailable', get_class($mailable))->where('slug', $slug);
    }

<<<<<<< HEAD
=======
        if(!method_exists($mailable, 'getSlug')){
            throw new Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
        }
        $slug=$mailable->getSlug();
        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $slug);
    }


>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
    /*
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
=======

    public function versions(): HasMany
    {
        return $this->hasMany(MailTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(MailTemplateLog::class, 'template_id');
    }

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
=======
    public function createNewVersion(string $createdBy, ?string $notes = null): self
    {
        $this->versions()->create([
            'mailable' => $this->mailable,
            'subject' => $this->subject,
            'html_template' => $this->html_template,
            'text_template' => $this->text_template,
            'version' => $this->version,
            'created_by' => $createdBy,
            'change_notes' => $notes,
        ]);

        $this->increment('version');
        return $this;
    }
    */


>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
}
