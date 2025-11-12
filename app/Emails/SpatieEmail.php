<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Address;
>>>>>>> 99ff506 (.)
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Mustache_Engine;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
use Symfony\Component\Mime\MimeTypes;
=======
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
>>>>>>> 99ff506 (.)
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;

/**
 * @see https://github.com/spatie/laravel-database-mail-templates
 */
class SpatieEmail extends TemplateMailable
{
    // use our custom mail template model
    /** @var class-string<MailTemplateInterface> */
    protected static $templateModelClass = MailTemplate::class;
<<<<<<< HEAD

    public string $slug;

=======
    public string $slug;
>>>>>>> 99ff506 (.)
    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
<<<<<<< HEAD
    protected ?string $recipient = null;
=======
    protected null|string $recipient = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
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
>>>>>>> f813254 (.)
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->slug = Str::slug($slug);

        $tpl = MailTemplate::firstOrCreate(
            [
                'mailable' => SpatieEmail::class,
                'slug' => $this->slug,
            ],
            [
                'subject' => 'Benvenuto, {{ first_name }}',
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
>>>>>>> 99ff506 (.)
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
        $this->data['site_url'] = url('/'.$lang);
=======
        $this->data['site_url'] = url('/' . $lang);
>>>>>>> 99ff506 (.)

        $this->data['logo_header'] = MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64'] = MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg'] = MetatagData::make()->getBrandLogoSvg();

        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);

        $logoPath = MetatagData::make()->getBrandLogoPath();
<<<<<<< HEAD
<<<<<<< HEAD
        $this->embedLogo($logoPath);
    }

    public function embedLogo(string $path): self
    {
        if (! file_exists($path)) {
=======
        $this->embedLogo($logoPath, 'logo_header');
=======
        $this->embedLogo($logoPath);
>>>>>>> a187384 (.)
    }

    public function embedLogo(string $path): self
    {
        if (!file_exists($path)) {
>>>>>>> 99ff506 (.)
            return $this;
        }

        $mime = File::mimeType($path);
<<<<<<< HEAD
        if (! is_string($mime)) {
=======
        if (!is_string($mime)) {
>>>>>>> 99ff506 (.)
            $mime = 'application/octet-stream';
        }
        $filename = basename($path);

        $attachment = Attachment::fromPath($path)->as($filename)->withMime($mime);

        $this->customAttachments[] = $attachment;

        return $this;
    }

    public function mergeData(array $data): self
    {
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

=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
        $this->data=array_merge($this->data,$data);
        $this->setAdditionalData($this->data);
        $params=implode(',',array_keys($this->data));
        MailTemplate::where(['slug'=>$this->slug,'mailable'=>SpatieEmail::class])->update(['params'=>$params]);
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        return $this;
    }

<<<<<<< HEAD
    /**
     * Set the email recipient.
<<<<<<< HEAD
=======
     *
     * @param string $email
     * @return self
>>>>>>> 99ff506 (.)
     */
    public function setRecipient(string $email): self
    {
        $this->recipient = $email;
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return $this;
    }

    /**
     * Get the message envelope.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)

=======
        
>>>>>>> b19cd40 (.)
        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }
=======
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)

        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }

        return $envelope;
    }

=======
>>>>>>> 6a92a74 (.)
    public function getHtmlLayout(): string
    {
<<<<<<< HEAD
        // $pathToLayout = storage_path('mail-layouts/main.html');

        // return file_get_contents($pathToLayout);
=======
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
>>>>>>> 99ff506 (.)
        /**
         * In your application you might want to fetch the layout from an external file or Blade view.
         *
         * External file: `return file_get_contents(storage_path('mail-layouts/main.html'));`
         *
         * Blade view: `return view('mailLayouts.main', $data)->render();`
         */
<<<<<<< HEAD
        // $pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        // dddx(MetatagData::make()->toArray());
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/'.$pub_theme.'');

        // $pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';

        return file_get_contents($pathToLayout);

        // return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
=======
        //$pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        //dddx(MetatagData::make()->toArray());
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/' . $pub_theme . '');

        //$pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath . '/resources/mail-layouts/base.html';
        return file_get_contents($pathToLayout);

        //return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
>>>>>>> 99ff506 (.)
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getAttachmentFromPath(array $attachment): Attachment
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a187384 (.)
        // Valida e tipizza parametri
        Assert::keyExists($attachment, 'path', 'Attachment must have path');
        Assert::string($attachment['path'], 'Attachment path must be string');

        $path = $attachment['path'];
        $res = Attachment::fromPath($path);
        $info = pathinfo($path);

        // Determina filename
        $filename = isset($attachment['as']) ? (string) $attachment['as'] : ($info['basename'] ?? 'attachment');

        // Determina MIME type
        $mime = isset($attachment['mime']) ? (string) $attachment['mime'] : null;
        if ($mime === null) {
            $detectedMime = File::mimeType($path);
            $mime = is_string($detectedMime) ? $detectedMime : 'application/octet-stream';
        }
<<<<<<< HEAD

        $res = $res->as($filename)->withMime($mime);

=======
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
=======
        $path = $attachment['path'];
        Assert::string($path, 'Attachment path must be string');

        $res = Attachment::fromPath($path);
        $info = pathinfo($path);

>>>>>>> 05bc3ad (.)
=======
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
>>>>>>> ab15d0e (.)
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);
=======
>>>>>>> a187384 (.)

        $res = $res->as($filename)->withMime($mime);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $res->as($filename)->withMime($mime);
>>>>>>> f813254 (.)
=======
        $res = $res
            ->as($filename)
            ->withMime($mime);
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $res = $res->as($filename)->withMime($mime);
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
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
=======
>>>>>>> a187384 (.)
        // Valida parametri obbligatori
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::keyExists($attachment, 'as', 'Attachment must have filename (as)');
        Assert::string($attachment['as'], 'Attachment filename must be string');
<<<<<<< HEAD
=======
        // Valida e tipizza parametri
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::string($attachment['data'], 'Attachment data must be string');
>>>>>>> 6a92a74 (.)

        $data = $attachment['data'];
        $res = Attachment::fromData(fn () => $data);

        // Determina filename
        $filename = isset($attachment['as']) ? (string) $attachment['as'] : 'attachment';

        // Determina MIME type
        $mime = isset($attachment['mime']) ? (string) $attachment['mime'] : 'application/octet-stream';

        $res = $res->as($filename)->withMime($mime);

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
        $res = Attachment::fromData(fn() => $attachment['data']);
        $as = $attachment['as'];

<<<<<<< HEAD
        $mime = Arr::get($attachment, 'mime', null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
=======
        $mime = Arr::get($attachment, 'mime', null); // ?? File::mimeType($as);   file vuole un file esistente
<<<<<<< HEAD
        $info = pathinfo($as);
>>>>>>> 05bc3ad (.)
=======
        $info = pathinfo($attachment['as']);
>>>>>>> ab15d0e (.)
        if ($mime === null && isset($info['extension'])) {
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
        }
        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

        $res = $res->as($as)->withMime($mime);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
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
=======

        $res = Attachment::fromData(fn () => $attachment['data']);
        $filename = $attachment['as']; // Laravel convention: 'as' parameter name

        // Determina MIME type
        $mime = Arr::get($attachment, 'mime', null);

        if ($mime === null) {
            // Tenta di determinare MIME type da estensione filename
            $info = pathinfo($filename);
            if (isset($info['extension'])) {
                $detectedMime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
                $mime = is_string($detectedMime) ? $detectedMime : null;
            }
>>>>>>> a187384 (.)
        }

        if ($mime === null) {
            $mime = 'application/octet-stream';
        }
<<<<<<< HEAD
        Assert::string($mime, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

<<<<<<< HEAD
        $res = $res
            ->as($as)
            ->withMime($mime);
>>>>>>> a12f125f4a (.)
=======
        $res = $res->as($as)->withMime($mime);
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
        $res = Attachment::fromData(fn () => $attachment['data']);
        $as = $attachment['as'];
        
=======

        // Cast a stringa per sicurezza
        if (! is_string($mime)) {
            $mime = 'application/octet-stream';
        }

        $res = $res->as($filename)->withMime($mime);
>>>>>>> a187384 (.)

        $mime = Arr::get($attachment,'mime',null); //?? File::mimeType($as);   file vuole un file esistente
        $info = pathinfo($attachment['as']);
        if($mime==null && isset($info['extension'])){
<<<<<<< HEAD
            $mime = Arr::first(MimeTypes::getDefault()->getMimeTypes($info['extension']));
=======
            $mime = Arr::first(\Symfony\Component\Mime\MimeTypes::getDefault()->getMimeTypes($info['extension']));
>>>>>>> f813254 (.)
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
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        return $res;
    }

    /**
     * Add attachments to the email
     *
<<<<<<< HEAD
     * @param  array<int, array<string, string>>  $attachments  Array of attachment data
=======
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
>>>>>>> 99ff506 (.)
     */
    public function addAttachments(array $attachments): self
    {
        $attachmentObjects = [];

        foreach ($attachments as $item) {
            $attachment = null;
            if (isset($item['path']) && file_exists($item['path'])) {
                $attachment = $this->getAttachmentFromPath($item);
            }

            if ($attachment === null && isset($item['data'])) {
                $attachment = $this->getAttachmentFromData($item);
            }

            if ($attachment) {
                $attachmentObjects[] = $attachment;
            }
        }

        $this->customAttachments = $attachmentObjects;

        return $this;
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return $this->customAttachments;
    }

    public function buildSms(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore method.notFound */
        $smsTemplate = $this->getMailTemplate()->getAttributeValue('sms_template');

        // Valida e cast template a stringa
        if (! is_string($smsTemplate)) {
            $smsTemplate = '';
        }

        $mustache = app(Mustache_Engine::class);

        return $mustache->render($smsTemplate, $this->data);
=======
        /**@phpstan-ignore method.notFound */
        $sms_template = $this->getMailTemplate()->getAttributeValue('sms_template');
        $mustache = app(Mustache_Engine::class);
        $sms = $mustache->render($sms_template, $this->data);

        return $sms;
>>>>>>> 99ff506 (.)
=======
        /* @phpstan-ignore method.notFound */
        $smsTemplate = $this->getMailTemplate()->getAttributeValue('sms_template');

        // Valida e cast template a stringa
        if (! is_string($smsTemplate)) {
            $smsTemplate = '';
        }

        $mustache = app(Mustache_Engine::class);

        return $mustache->render($smsTemplate, $this->data);
>>>>>>> a187384 (.)
    }
}
