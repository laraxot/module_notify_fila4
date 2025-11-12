<?php

declare(strict_types=1);

namespace Modules\Notify\Emails;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Mustache_Engine;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\TemplateMailable;
use Symfony\Component\Mime\MimeTypes;
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

    public string $slug;

    /** @var array<int, Attachment> */
    protected array $customAttachments = [];

    public array $data = [];

    /**
     * The email recipient
     */
    protected ?string $recipient = null;

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
                'html_template' => '<p>Gentile {{ first_name }} {{ last_name }},</p><p>La tua registrazione  è in attesa di approvazione. Ti contatteremo presto.</p>['.
                        $this->slug.
                        ']',
                'text_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.
                        $this->slug.
                        ']',
                'sms_template' => 'Gentile {{ first_name }} {{ last_name }}, la tua registrazione  è in attesa di approvazione. Ti contatteremo presto.['.
                        $this->slug.
                        ']',
            ],
        );

        if ($tpl !== null) {
            $tpl->update(['counter' => $tpl->counter + 1]);
        }
        $lang = app()->getLocale();
        $data = app(SafeArrayByModelCastAction::class)->execute($record);
        $this->data['lang'] = $lang;
        $this->data['login_url'] = route('login');
        $this->data['site_url'] = url('/'.$lang);

        $this->data['logo_header'] = MetatagData::make()->getBrandLogo();
        $this->data['logo_header_base64'] = MetatagData::make()->getBrandLogoBase64();
        $this->data['logo_svg'] = MetatagData::make()->getBrandLogoSvg();

        $this->data = array_merge($this->data, $data);
        $this->setAdditionalData($this->data);

        $logoPath = MetatagData::make()->getBrandLogoPath();
        $this->embedLogo($logoPath);
    }

    public function embedLogo(string $path): self
    {
        if (! file_exists($path)) {
            return $this;
        }

        $mime = File::mimeType($path);
        if (! is_string($mime)) {
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

        return $this;
    }

    public function getHtmlLayout(): string
    {
        // $pathToLayout = storage_path('mail-layouts/main.html');

        // return file_get_contents($pathToLayout);
        /**
         * In your application you might want to fetch the layout from an external file or Blade view.
         *
         * External file: `return file_get_contents(storage_path('mail-layouts/main.html'));`
         *
         * Blade view: `return view('mailLayouts.main', $data)->render();`
         */
        // $pathToLayout = module_path('Notify','resources/mail-layouts/base/responsive.html');
        // dddx(MetatagData::make()->toArray());
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/'.$pub_theme.'');

        // $pathToLayout = module_path('Notify','resources/mail-layouts/base.html');
        $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';

        return file_get_contents($pathToLayout);

        // return '<header>Site name!</header>{{{ body }}}<footer>Copyright 2018</footer>';
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getAttachmentFromPath(array $attachment): Attachment
    {
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

        $res = $res->as($filename)->withMime($mime);

        return $res;
    }

    public function getAttachmentFromData(array $attachment): Attachment
    {
<<<<<<< HEAD
        // Valida e tipizza parametri
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::string($attachment['data'], 'Attachment data must be string');

        $data = $attachment['data'];
        $res = Attachment::fromData(fn () => $data);

        // Determina filename
        $filename = isset($attachment['as']) ? (string) $attachment['as'] : 'attachment';

        // Determina MIME type
        $mime = isset($attachment['mime']) ? (string) $attachment['mime'] : 'application/octet-stream';
=======
        // Valida parametri obbligatori
        Assert::keyExists($attachment, 'data', 'Attachment must have data');
        Assert::keyExists($attachment, 'as', 'Attachment must have filename (as)');
        Assert::string($attachment['as'], 'Attachment filename must be string');

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
        }

        if ($mime === null) {
            $mime = 'application/octet-stream';
        }

        // Cast a stringa per sicurezza
        if (! is_string($mime)) {
            $mime = 'application/octet-stream';
        }
>>>>>>> 6ba141fc (.)

        $res = $res->as($filename)->withMime($mime);

        return $res;
    }

    /**
     * Add attachments to the email
     *
     * @param  array<int, array<string, string>>  $attachments  Array of attachment data
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
        /* @phpstan-ignore method.notFound */
        $smsTemplate = $this->getMailTemplate()->getAttributeValue('sms_template');

        // Valida e cast template a stringa
        if (! is_string($smsTemplate)) {
            $smsTemplate = '';
        }

        $mustache = app(Mustache_Engine::class);

        return $mustache->render($smsTemplate, $this->data);
    }
}
