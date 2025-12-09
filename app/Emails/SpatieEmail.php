<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
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
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Address;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Address;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
=======
<<<<<<< HEAD
use Mustache_Engine;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
use Symfony\Component\Mime\MimeTypes;
=======
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use function Safe\file_get_contents;
use Illuminate\Support\Facades\File;
use Illuminate\Mail\Mailables\Address;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\MailTemplates\TemplateMailable;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use function Safe\file_get_contents;
use Illuminate\Support\Facades\File;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Envelope;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Mail\Mailables\Attachment;

use Spatie\MailTemplates\TemplateMailable;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)

/**
 * @see https://github.com/spatie/laravel-database-mail-templates
 */
class SpatieEmail extends TemplateMailable
{
    // use our custom mail template model
    /** @var class-string<MailTemplateInterface> */
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
=======
>>>>>>> 3f39ac8b (.)
    protected static $templateModelClass = MailTemplate::class;
<<<<<<< HEAD
    public string $slug;
=======
<<<<<<< HEAD

    public string $slug;

=======
    public string $slug;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
<<<<<<< HEAD
    protected null|string $recipient = null;
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
    protected static  $templateModelClass = MailTemplate::class;
=======
    protected static $templateModelClass = MailTemplate::class;
>>>>>>> b93ef594b4 (.)
    public string $slug;
    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
=======
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
    protected ?string $recipient = null;
=======
    protected null|string $recipient = null;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    protected static  $templateModelClass = MailTemplate::class;
    public string $slug;
     /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data=[];
    
    /**
     * The email recipient
     */
    protected ?string $recipient = null;

    
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)

    
>>>>>>> a12f125f4a (.)
=======
    protected null|string $recipient = null;
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    protected static  $templateModelClass = MailTemplate::class;
    public string $slug;
     /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data=[];
    
    /**
     * The email recipient
     */
    protected ?string $recipient = null;

    
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)

    public function __construct(Model $record, string $slug)
    {
        $this->slug = Str::slug($slug);
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
=======
>>>>>>> 3f39ac8b (.)

        $tpl = MailTemplate::firstOrCreate(
            [
                'mailable' => SpatieEmail::class,
                'slug' => $this->slug,
            ],
            [
                'subject' => 'Benvenuto, {{ first_name }}',
<<<<<<< HEAD
=======
<<<<<<< HEAD
                'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>['.
                        $this->slug.
                        ']',
                'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.
                        $this->slug.
                        ']',
                'sms_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.
                        $this->slug.
                        ']',
=======
>>>>>>> f1c9518b (.)
                'html_template' =>

                        '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>[' .
                        $this->slug .
                        ']'
                    ,
                'text_template' =>

                        'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.[' .
                        $this->slug .
                        ']'
                    ,
                'sms_template' =>

                        'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.[' .
                        $this->slug .
                        ']'
                    ,
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            ],
        );

        if ($tpl !== null) {
            $tpl->update(['counter' => $tpl->counter + 1]);
        }
        $lang = app()->getLocale();
        $data = app(SafeArrayByModelCastAction::class)->execute($record);
        $this->data['lang'] = $lang;
        $this->data['login_url'] = route('login');
<<<<<<< HEAD
        $this->data['site_url'] = url('/' . $lang);
=======
<<<<<<< HEAD
        $this->data['site_url'] = url('/'.$lang);
=======
        $this->data['site_url'] = url('/' . $lang);
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)

        $this->data['logo_header'] = MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64'] = MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg'] = MetatagData::make()->getBrandLogoSvg();

        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);

        $logoPath = MetatagData::make()->getBrandLogoPath();
<<<<<<< HEAD
        $this->embedLogo($logoPath, 'logo_header');
=======
<<<<<<< HEAD
        $this->embedLogo($logoPath);
>>>>>>> f1c9518b (.)
    }

    public function embedLogo(string $path, string $cid = 'logo_header'): self
    {
<<<<<<< HEAD
        if (!file_exists($path)) {
=======
        if (! file_exists($path)) {
=======
        $this->embedLogo($logoPath, 'logo_header');
    }

    public function embedLogo(string $path, string $cid = 'logo_header'): self
    {
        if (!file_exists($path)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            return $this;
        }

        $mime = File::mimeType($path);
<<<<<<< HEAD
        if (!is_string($mime)) {
=======
<<<<<<< HEAD
        if (! is_string($mime)) {
=======
        if (!is_string($mime)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            $mime = 'application/octet-stream';
        }
        $filename = basename($path);

        $attachment = Attachment::fromPath($path)->as($filename)->withMime($mime);

        $this->customAttachments[] = $attachment;

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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
        
        $tpl=MailTemplate::firstOrCreate([
            'mailable' => SpatieEmail::class,
            'slug' => $this->slug,
        ],[
            'subject' => 'Benvenuto, {{ first_name }}',
            'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>['.$this->slug.']',
            'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.$this->slug.']',
            'sms_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.$this->slug.']'
        ]);
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> b93ef594b4 (.)

        $tpl = MailTemplate::firstOrCreate(
            [
                'mailable' => SpatieEmail::class,
                'slug' => $this->slug,
            ],
            [
                'subject' => 'Benvenuto, {{ first_name }}',
                'html_template' =>

                        '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>[' .
                        $this->slug .
                        ']'
                    ,
                'text_template' =>

                        'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.[' .
                        $this->slug .
                        ']'
                    ,
                'sms_template' =>

                        'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.[' .
                        $this->slug .
                        ']'
                    ,
            ],
        );

        if ($tpl !== null) {
            $tpl->update(['counter' => $tpl->counter + 1]);
        }
        $lang = app()->getLocale();
        $data = app(SafeArrayByModelCastAction::class)->execute($record);
        $this->data['lang'] = $lang;
        $this->data['login_url'] = route('login');
        $this->data['site_url'] = url('/' . $lang);

        $this->data['logo_header'] = MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64'] = MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg'] = MetatagData::make()->getBrandLogoSvg();

        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);

        $logoPath = MetatagData::make()->getBrandLogoPath();
        $this->embedLogo($logoPath, 'logo_header');
    }

    public function embedLogo(string $path, string $cid = 'logo_header'): self
    {
        if (!file_exists($path)) {
            return $this;
        }

        $mime = File::mimeType($path);
        if (!is_string($mime)) {
            $mime = 'application/octet-stream';
        }
        $filename = basename($path);

        $attachment = Attachment::fromPath($path)->as($filename)->withMime($mime);

        $this->customAttachments[] = $attachment;
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
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

        $tpl->increment('counter');
        $lang=app()->getLocale();
        $data = app(SafeArrayByModelCastAction::class)->execute($record);
        $this->data['lang']=$lang;
        $this->data['login_url']=route('login');
        $this->data['site_url']=url('/'.$lang);

        $this->data['logo_header']=MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64']=MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg']=MetatagData::make()->getBrandLogoSvg();
        
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);

        $logoPath=MetatagData::make()->getBrandLogoPath();
        $this->embedLogo($logoPath, 'logo_header');
        

    }


    public function embedLogo(string $path, string $cid = 'logo_header'): self
    {
        

        if (!file_exists($path)) {
            return $this;
        }
        
        $mime = File::mimeType($path);
        if(!is_string($mime)){
            $mime='application/octet-stream';
        }
        $filename = basename($path);
    
        $attachment = Attachment::fromPath($path)
            ->as($filename)
            ->withMime($mime)
            ;  
    
        $this->customAttachments[] = $attachment;
    
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
        return $this;
    }

    public function mergeData(array $data): self
    {
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
=======
>>>>>>> 3f39ac8b (.)
        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);
        $params = implode(',', array_keys($this->data));
        MailTemplate::where(['slug' => $this->slug, 'mailable' => SpatieEmail::class])->update(['params' => $params]);
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $params=implode(',',array_keys($this->data));
        MailTemplate::where(['slug'=>$this->slug,'mailable'=>SpatieEmail::class])->update(['params'=>$params]);
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);
        $params = implode(',', array_keys($this->data));
        MailTemplate::where(['slug' => $this->slug, 'mailable' => SpatieEmail::class])->update(['params' => $params]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
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
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
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

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======

=======
>>>>>>> 99ff506 (.)
=======
=======
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $params=implode(',',array_keys($this->data));
        MailTemplate::where(['slug'=>$this->slug,'mailable'=>SpatieEmail::class])->update(['params'=>$params]);
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
        return $this;
    }

    /**
     * Set the email recipient.
<<<<<<< HEAD
     *
     * @param string $email
     * @return self
=======
<<<<<<< HEAD
=======
     *
     * @param string $email
     * @return self
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function setRecipient(string $email): self
    {
        $this->recipient = $email;
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        return $this;
    }

    /**
     * Get the message envelope.
<<<<<<< HEAD
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope();
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope;
=======
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope();
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)

=======
        
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

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
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
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)

=======
        
>>>>>>> b19cd40 (.)
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
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
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
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 207ac35e (.)
=======

>>>>>>> 011072e4 (.)
=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
=======
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> b19cd40 (.)
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
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
        return $envelope;
    }

    public function getHtmlLayout(): string
    {
<<<<<<< HEAD
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
=======
<<<<<<< HEAD
        // $pathToLayout = storage_path('mail-layouts/main.html');

        // return file_get_contents($pathToLayout);
=======
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        /**
         * In your application you might want to fetch the layout from an external file or Blade view.
         *
         * External file: `return file_get_contents(storage_path('mail-layouts/main.html'));`
         *
         * Blade view: `return view('mailLayouts.main', $data)->render();`
         */
<<<<<<< HEAD
        //$pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        //dddx(MetatagData::make()->toArray());
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
=======
<<<<<<< HEAD
        // $pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        // dddx(MetatagData::make()->toArray());
>>>>>>> f1c9518b (.)
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/' . $pub_theme . '');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath . '/resources/mail-layouts/base.html';
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
        $xot=XotData::make();
        $pub_theme=$xot->pub_theme;
        $pubThemePath=base_path('Themes/'.$pub_theme.'');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/' . $pub_theme . '');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath . '/resources/mail-layouts/base.html';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
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
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
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
        return file_get_contents($pathToLayout);

<<<<<<< HEAD
        //return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
=======
        // return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
=======
        //$pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        //dddx(MetatagData::make()->toArray());
<<<<<<< HEAD
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/' . $pub_theme . '');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath . '/resources/mail-layouts/base.html';
=======
        $xot=XotData::make();
        $pub_theme=$xot->pub_theme;
        $pubThemePath=base_path('Themes/'.$pub_theme.'');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';
>>>>>>> b19cd40 (.)
        return file_get_contents($pathToLayout);

        //return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

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
    /**
     * @param array{path: string, as?: string, mime?: string} $attachment
     * @return Attachment
     */
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
    public function getAttachmentFromPath(array $attachment): Attachment
    {
<<<<<<< HEAD
        /** @var string $path */
=======
<<<<<<< HEAD
        // Valida e tipizza parametri
        Assert::keyExists($attachment, 'path', 'Attachment must have path');
        Assert::string($attachment['path'], 'Attachment path must be string');

>>>>>>> f1c9518b (.)
        $path = $attachment['path'];
        $res = Attachment::fromPath($path);
        /** @var array<string, string> $info */
        $info = pathinfo($path);
        /** @var string $filename */
        $filename = $attachment['as'] ?? ($info['basename'] ?? basename($path));
        /** @var string|null $mime */
        $mime = $attachment['mime'] ?? File::mimeType($path);
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
=======
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> 3f537838 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> b19cd40 (.)
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
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> b19cd40 (.)
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
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> b19cd40 (.)
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
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
    public function getAttachmentFromPath(array $attachment): Attachment
    {
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)

        $res = $res->as($filename)->withMime($mime);
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
        $res = $res->as($filename)->withMime($mime);
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
        $res = $res
            ->as($filename)
            ->withMime($mime);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
        $res = $res->as($filename)->withMime($mime);
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $res = $res
            ->as($filename)
            ->withMime($mime);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======

        $res = $res->as($filename)->withMime($mime);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======

        $res = $res->as($filename)->withMime($mime);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);

<<<<<<< HEAD
        $res = $res->as($filename)->withMime($mime);
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
        $res = $res
            ->as($filename)
            ->withMime($mime);
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
        return $res;
    }

    public function getAttachmentFromData(array $attachment): Attachment
    {
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
        $res = Attachment::fromData(fn() => $attachment['data']);
<<<<<<< HEAD
        /** @var string|null $asRaw */
        $asRaw = $attachment['as'] ?? null;
        $as = is_string($asRaw) ? $asRaw : '';
=======
=======
>>>>>>> 3f39ac8b (.)
        // Valida parametri obbligatori
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::keyExists($attachment, 'as', 'Attachment must have filename (as)');
        Assert::string($attachment['as'], 'Attachment filename must be string');
>>>>>>> f1c9518b (.)

        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        /** @var string $asForPathinfo */
        $asForPathinfo = is_string($attachment['as']) ? $attachment['as'] : '';
        $info = pathinfo($asForPathinfo);
=======
        $as = $attachment['as'];

        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
>>>>>>> 75179b85 (.)
        if ($mime === null && isset($info['extension'])) {
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

<<<<<<< HEAD
        /** @var string|null $asForMethod */
        $asForMethod = is_string($asRaw) ? $asRaw : null;
        $res = $res->as($asForMethod)->withMime($mime);
=======
        $res = $res->as($as)->withMime($mime);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
        $res = Attachment::fromData(fn () => $attachment['data']);
=======
        $res = Attachment::fromData(fn() => $attachment['data']);
>>>>>>> b93ef594b4 (.)
=======
        $res = Attachment::fromData(fn() => $attachment['data']);
>>>>>>> 75179b85 (.)
=======
        $res = Attachment::fromData(fn() => $attachment['data']);
>>>>>>> 75179b85 (.)
=======
        $res = Attachment::fromData(fn() => $attachment['data']);
>>>>>>> 75179b85 (.)
        $as = $attachment['as'];

        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if ($mime === null && isset($info['extension'])) {
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $res
            ->as($as)
            ->withMime($mime);
>>>>>>> a12f125f4a (.)
=======
        $res = $res->as($as)->withMime($mime);
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
        $res = Attachment::fromData(fn () => $attachment['data']);
=======
        $res = Attachment::fromData(fn() => $attachment['data']);
>>>>>>> b93ef594b4 (.)
        $as = $attachment['as'];

        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if ($mime === null && isset($info['extension'])) {
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

<<<<<<< HEAD
        $res = $res
            ->as($as)
            ->withMime($mime);
>>>>>>> a12f125f4a (.)
=======
        $res = $res->as($as)->withMime($mime);
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $res = Attachment::fromData(fn () => $attachment['data']);
        $as = $attachment['as'];
        

<<<<<<< HEAD
        $mime = Arr::get($attachment,'mime',null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if($mime==null && isset($info['extension'])){
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
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> d09cb759 (.)
=======
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> de02998b (.)
=======
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> 82ae73be (.)
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> d09cb759 (.)
=======
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> 82ae73be (.)
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> d09cb759 (.)
=======
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> 82ae73be (.)
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> d09cb759 (.)
=======
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> de02998b (.)
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> 4689a827 (.)
        }
        if($mime==null){
            $mime='application/octet-stream';
        }
        Assert::string($mime);            

        $res = $res
            ->as($as)
            ->withMime($mime);
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        $res = $res->as($as)->withMime($mime);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        $res = $res->as($as)->withMime($mime);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        $res = $res->as($as)->withMime($mime);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
=======
>>>>>>> 95531e1 (.)
        $res = Attachment::fromData(fn() => $attachment['data']);
        $as = $attachment['as'];

        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if ($mime === null && isset($info['extension'])) {
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

        $res = $res->as($as)->withMime($mime);
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
        $res = Attachment::fromData(fn () => $attachment['data']);
        $as = $attachment['as'];
        

        $mime = Arr::get($attachment,'mime',null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if($mime==null && isset($info['extension'])){
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if($mime==null){
            $mime='application/octet-stream';
        }
        Assert::string($mime);            

        $res = $res
            ->as($as)
            ->withMime($mime);
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
        return $res;
    }

    /**
     * Add attachments to the email
     *
<<<<<<< HEAD
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
=======
<<<<<<< HEAD
     * @param  array<int, array<string, string>>  $attachments  Array of attachment data
=======
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function addAttachments(array $attachments): self
    {
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
=======
>>>>>>> 3f39ac8b (.)
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            $attachment = null;
            if (isset($item['path']) && file_exists($item['path'])) {
                $attachment = $this->getAttachmentFromPath($item);
            }

            if ($attachment === null && isset($item['data'])) {
                $attachment = $this->getAttachmentFromData($item);
            }

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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
        
=======
>>>>>>> b93ef594b4 (.)
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            $attachment = null;
            if (isset($item['path']) && file_exists($item['path'])) {
                $attachment = $this->getAttachmentFromPath($item);
            }

            if ($attachment === null && isset($item['data'])) {
                $attachment = $this->getAttachmentFromData($item);
            }
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            $attachment=null;
            if (isset($item['path']) && file_exists($item['path'])) {
                $attachment=$this->getAttachmentFromPath($item);
            }

            if($attachment==null && isset($item['data'])){
                $attachment=$this->getAttachmentFromData($item);
            }
            
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
            if ($attachment) {
                $attachmentObjects[] = $attachment;
            }
        }

        $this->customAttachments = $attachmentObjects;
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
        
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
=======
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)

        return $this;
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
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
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
        return $this->customAttachments;
    }

    public function buildSms(): string
    {
<<<<<<< HEAD
        /**@phpstan-ignore method.notFound */
        $sms_template = $this->getMailTemplate()->getAttributeValue('sms_template');
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string $smsTemplateString */
        $smsTemplateString = is_string($sms_template) ? $sms_template : '';
=======
<<<<<<< HEAD
        /* @phpstan-ignore method.notFound */
        $smsTemplate = $this->getMailTemplate()->getAttributeValue('sms_template');

        // Valida e cast template a stringa
        if (! is_string($smsTemplate)) {
            $smsTemplate = '';
        }

>>>>>>> f1c9518b (.)
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($smsTemplateString, $this->data);
=======
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);
>>>>>>> 75179b85 (.)

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
>>>>>>> 011072e4 (.)
=======
        
        return $this->customAttachments;
    }


    public function buildSms():string{
        /**@phpstan-ignore method.notFound */
        $sms_template=$this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache= app(Mustache_Engine::class); 
        $sms = $mustache->render(
            $sms_template,
            $this->data
        );

        
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
        
=======
=======
=======
        
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
        return $this->customAttachments;
    }

    public function buildSms(): string
    {
=======
        return $mustache->render($smsTemplate, $this->data);
=======
>>>>>>> f1c9518b (.)
        /**@phpstan-ignore method.notFound */
        $sms_template = $this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);

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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
        
=======
>>>>>>> b93ef594b4 (.)
        return $this->customAttachments;
    }

    public function buildSms(): string
    {
        /**@phpstan-ignore method.notFound */
        $sms_template = $this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
        
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
        
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
        
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
        
>>>>>>> 3f39ac8b (.)
        return $this->customAttachments;
    }


    public function buildSms():string{
        /**@phpstan-ignore method.notFound */
        $sms_template=$this->getMailTemplate()->getAttributeValue('sms_template');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mustache= app(Mustache_Engine::class); 
=======
        $mustache= app(\Mustache_Engine::class); 
>>>>>>> d09cb759 (.)
=======
        $mustache= app(Mustache_Engine::class); 
>>>>>>> 82ae73be (.)
=======
        $mustache= app(\Mustache_Engine::class); 
>>>>>>> d09cb759 (.)
=======
        $mustache= app(Mustache_Engine::class); 
>>>>>>> 82ae73be (.)
=======
        $mustache= app(\Mustache_Engine::class); 
>>>>>>> d09cb759 (.)
=======
        $mustache= app(Mustache_Engine::class); 
>>>>>>> de02998b (.)
=======
        $mustache= app(\Mustache_Engine::class); 
>>>>>>> 4689a827 (.)
=======
        $mustache= app(Mustache_Engine::class); 
>>>>>>> 3f39ac8b (.)
        $sms = $mustache->render(
            $sms_template,
            $this->data
        );

        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
        return $sms;
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
        return $sms;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    }
}
