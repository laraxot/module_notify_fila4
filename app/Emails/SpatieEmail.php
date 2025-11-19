<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
=======
use Symfony\Component\Mime\MimeTypes;
use Mustache_Engine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Arr;
>>>>>>> 75179b8 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Mustache_Engine;
=======
>>>>>>> 75179b8 (.)
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;

/**
 * @see https://github.com/spatie/laravel-database-mail-templates
 */
class SpatieEmail extends TemplateMailable
{
<<<<<<< HEAD
    public string $slug;

    public array $data = [];

    // use our custom mail template model
    /** @var class-string<MailTemplateInterface> */
    protected static $templateModelClass = MailTemplate::class;

    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    /**
     * The email recipient
     */
    protected ?string $recipient = null;
=======
    // use our custom mail template model
    /** @var class-string<MailTemplateInterface> */
    protected static $templateModelClass = MailTemplate::class;
    public string $slug;
    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
    protected null|string $recipient = null;
>>>>>>> 75179b8 (.)

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
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)

        $this->data['logo_header'] = MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64'] = MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg'] = MetatagData::make()->getBrandLogoSvg();

        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);

        $logoPath = MetatagData::make()->getBrandLogoPath();
<<<<<<< HEAD
        $this->embedLogo($logoPath);
    }

    public function embedLogo(string $path): self
    {
        if (! file_exists($path)) {
=======
        $this->embedLogo($logoPath, 'logo_header');
    }

    public function embedLogo(string $path, string $cid = 'logo_header'): self
    {
        if (!file_exists($path)) {
>>>>>>> 75179b8 (.)
            return $this;
        }

        $mime = File::mimeType($path);
<<<<<<< HEAD
        if (! is_string($mime)) {
=======
        if (!is_string($mime)) {
>>>>>>> 75179b8 (.)
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

=======
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
>>>>>>> 75179b8 (.)
        return $this;
    }

    /**
     * Get the message envelope.
<<<<<<< HEAD
     */
    public function envelope(): Envelope
    {
        $subject = $this->subject !== '' ? $this->subject : 'No Subject';

        return new Envelope(
            subject: $subject,
            to: is_string($this->recipient) && $this->recipient !== '' ? [$this->recipient] : []
        );
=======
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope();

        // Set the recipient if available
        if ($this->recipient) {
            $envelope->to($this->recipient);
        }

        return $envelope;
>>>>>>> 75179b8 (.)
    }

    public function getHtmlLayout(): string
    {
<<<<<<< HEAD
        // $pathToLayout = storage_path('mail-layouts/main.html');

        // return file_get_contents($pathToLayout);
=======
        //$pathToLayout = storage_path('mail-layouts/main.html');

        //return file_get_contents($pathToLayout);
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getAttachmentFromPath(array $attachment): Attachment
    {
<<<<<<< HEAD
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

        return $res->as($filename)->withMime($mime);
    }

    /**
     * @param  array<string, string>  $attachment
     */
    public function getAttachmentFromData(array $attachment): Attachment
    {
        // Valida e tipizza parametri
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::string($attachment['data'], 'Attachment data must be string');

        $data = $attachment['data'];
        $res = Attachment::fromData(fn () => $data);

        // Determina filename
        $filename = isset($attachment['as']) ? (string) $attachment['as'] : 'attachment';

        // Determina MIME type
        $mime = isset($attachment['mime']) ? (string) $attachment['mime'] : 'application/octet-stream';

        return $res->as($filename)->withMime($mime);
=======
        $res = Attachment::fromPath($attachment['path']);
        $info = pathinfo($attachment['path']);
        $filename = $attachment['as'] ?? $info['basename'];
        $mime = $attachment['mime'] ?? File::mimeType($attachment['path']);

        $res = $res->as($filename)->withMime($mime);
        return $res;
    }

    public function getAttachmentFromData(array $attachment): Attachment
    {
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
        return $res;
>>>>>>> 75179b8 (.)
    }

    /**
     * Add attachments to the email
     *
<<<<<<< HEAD
     * @param  array<int, array<string, string>>  $attachments  Array of attachment data
=======
     * @param array<int, array<string, string>> $attachments Array of attachment data
     * @return self
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)
    }
}
