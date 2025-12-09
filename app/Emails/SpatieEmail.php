<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
=======
<<<<<<< HEAD
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
use Spatie\MailTemplates\TemplateMailable;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

/**
 * @see https://github.com/spatie/laravel-database-mail-templates
 */
class SpatieEmail extends TemplateMailable
{
    // use our custom mail template model
    /** @var class-string<MailTemplateInterface> */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    protected static $templateModelClass = MailTemplate::class;
    public string $slug;
    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
    protected null|string $recipient = null;
<<<<<<< HEAD
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
<<<<<<< HEAD
    protected ?string $recipient = null;

    
>>>>>>> a12f125f4a (.)
=======
    protected null|string $recipient = null;
>>>>>>> b93ef594b4 (.)
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

    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->slug = Str::slug($slug);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

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
=======
=======
=======
>>>>>>> origin/develop
        
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
    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $this;
    }

    public function mergeData(array $data): self
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);
        $params = implode(',', array_keys($this->data));
        MailTemplate::where(['slug' => $this->slug, 'mailable' => SpatieEmail::class])->update(['params' => $params]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $params=implode(',',array_keys($this->data));
        MailTemplate::where(['slug'=>$this->slug,'mailable'=>SpatieEmail::class])->update(['params'=>$params]);
<<<<<<< HEAD
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
        return $this;
    }

    /**
     * Set the email recipient.
     *
     * @param string $email
     * @return self
     */
    public function setRecipient(string $email): self
    {
        $this->recipient = $email;
        return $this;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope();
<<<<<<< HEAD

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
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
<<<<<<< HEAD

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
        return $envelope;
    }

    public function getHtmlLayout(): string
    {
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
        /**
         * In your application you might want to fetch the layout from an external file or Blade view.
         *
         * External file: `return file_get_contents(storage_path('mail-layouts/main.html'));`
         *
         * Blade view: `return view('mailLayouts.main', $data)->render();`
         */
        //$pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        //dddx(MetatagData::make()->toArray());
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/' . $pub_theme . '');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath . '/resources/mail-layouts/base.html';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $xot=XotData::make();
        $pub_theme=$xot->pub_theme;
        $pubThemePath=base_path('Themes/'.$pub_theme.'');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';
<<<<<<< HEAD
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
        return file_get_contents($pathToLayout);

        //return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
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
    /**
     * @param array{path: string, as?: string, mime?: string} $attachment
     * @return Attachment
     */
    public function getAttachmentFromPath(array $attachment): Attachment
    {
        /** @var string $path */
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
>>>>>>> d09cb759 (.)
    public function getAttachmentFromPath(array $attachment): Attachment
    {
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);
>>>>>>> 75179b85 (.)

<<<<<<< HEAD
        $res = $res->as($filename)->withMime($mime);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $res->as($filename)->withMime($mime);
=======
        $res = $res
            ->as($filename)
            ->withMime($mime);
>>>>>>> a12f125f4a (.)
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> b93ef594b4 (.)
=======
        $res = $res
            ->as($filename)
            ->withMime($mime);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $res;
    }

    public function getAttachmentFromData(array $attachment): Attachment
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $res = Attachment::fromData(fn() => $attachment['data']);
<<<<<<< HEAD
        /** @var string|null $asRaw */
        $asRaw = $attachment['as'] ?? null;
        $as = is_string($asRaw) ? $asRaw : '';

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
>>>>>>> d09cb759 (.)
=======
        $res = Attachment::fromData(fn () => $attachment['data']);
        $as = $attachment['as'];
        

        $mime = Arr::get($attachment,'mime',null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if($mime==null && isset($info['extension'])){
<<<<<<< HEAD
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> d09cb759 (.)
        }
        if($mime==null){
            $mime='application/octet-stream';
        }
        Assert::string($mime);            

        $res = $res
            ->as($as)
            ->withMime($mime);
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
        return $res;
    }

    /**
     * Add attachments to the email
     *
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
     */
    public function addAttachments(array $attachments): self
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            if ($attachment) {
                $attachmentObjects[] = $attachment;
            }
        }

        $this->customAttachments = $attachmentObjects;
<<<<<<< HEAD
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

        return $this;
    }

    /**
     * Get the attachments for the message.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        return $this->customAttachments;
    }

    public function buildSms(): string
    {
        /**@phpstan-ignore method.notFound */
        $sms_template = $this->getMailTemplate()->getAttributeValue('sms_template');
<<<<<<< HEAD
        /** @var string $smsTemplateString */
        $smsTemplateString = is_string($sms_template) ? $sms_template : '';
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($smsTemplateString, $this->data);
=======
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);
>>>>>>> 75179b85 (.)

<<<<<<< HEAD
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
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        
        return $this->customAttachments;
    }


    public function buildSms():string{
        /**@phpstan-ignore method.notFound */
        $sms_template=$this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache= app(\Mustache_Engine::class); 
        $sms = $mustache->render(
            $sms_template,
            $this->data
        );

        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $sms;
    }
}
