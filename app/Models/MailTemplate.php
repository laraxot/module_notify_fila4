<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
// use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Exception;
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
=======
=======
=======
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
>>>>>>> b93ef594b4 (.)
use Exception;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

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
=======
 * @property int $id
 * @property string $mailable
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property int $version
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
<<<<<<< HEAD
 * @property Collection<int, MailTemplateVersion> $versions
 * @property Collection<int, MailTemplateLog> $logs
=======
 * @property-read Collection<int, MailTemplateVersion> $versions
 * @property-read Collection<int, MailTemplateLog> $logs
<<<<<<< HEAD
=======
=======
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateVersion> $versions
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateLog> $logs
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property string $name
 * @property string $slug
<<<<<<< HEAD
 * @property array $variables
 * @property mixed $translations
>>>>>>> 6ba141fc (.)
 *
=======
 * @property-read array $variables
 * @property-read mixed $translations
<<<<<<< HEAD
>>>>>>> f813254 (.)
 * @method static Builder<static>|MailTemplate forMailable(Mailable $mailable)
=======
<<<<<<< HEAD
 * @method static Builder<static>|MailTemplate forMailable(Mailable $mailable)
=======
 * @method static Builder<static>|MailTemplate forMailable(\Illuminate\Contracts\Mail\Mailable $mailable)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
 * @mixin IdeHelperMailTemplate
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
<<<<<<< HEAD
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];
=======
    public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
>>>>>>> a12f125f4a (.)
=======
    public array $translatable = ['subject', 'html_template', 'text_template', 'sms_template'];
>>>>>>> b93ef594b4 (.)
=======
    public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

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
<<<<<<< HEAD
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
=======
=======
>>>>>>> origin/develop
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    public function scopeForMailable(Builder $query, Mailable $mailable): Builder
    {
<<<<<<< HEAD
        if (! method_exists($mailable, 'getSlug')) {
            throw new \Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        if (!method_exists($mailable, 'getSlug')) {
            throw new Exception('Il metodo getSlug() non è definito nella classe ' . $mailable::class);
>>>>>>> f813254 (.)
        }
        $slug = $mailable->getSlug();

        return $query->where('mailable', get_class($mailable))->where('slug', $slug);
    }

<<<<<<< HEAD
=======
=======
        if(!method_exists($mailable, 'getSlug')){
            throw new Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
=======
        if (!method_exists($mailable, 'getSlug')) {
            throw new Exception('Il metodo getSlug() non è definito nella classe ' . $mailable::class);
>>>>>>> b93ef594b4 (.)
        }
        $slug = $mailable->getSlug();
        return $query->where('mailable', get_class($mailable))->where('slug', $slug);
    }

<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if(!method_exists($mailable, 'getSlug')){
            throw new \Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
        }
        $slug=$mailable->getSlug();
        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $slug);
    }


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    /*
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop

    public function versions(): HasMany
    {
        return $this->hasMany(MailTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(MailTemplateLog::class, 'template_id');
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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


<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
