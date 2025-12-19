<?php
 
declare(strict_types=1);
 
namespace Modules\Notify\Filament\Forms\Components;
 
use Filament\Forms\Components\Select;
use Modules\Notify\Models\MailTemplate;
 
class MailTemplateSelect extends Select
{
    protected function setUp(): void
    {
        parent::setUp();
 
        $this->label(__('notify::form.mail_template'))
            ->options(
                /** @return array<string, string> */
                fn (): array => MailTemplate::query()
                    ->orderBy('name')
                    ->pluck('name', 'slug')
                    ->all()
            )
            ->required();
    }
 
    /**
     * Create a new MailTemplateSelect instance.
     *
     * @param string|null $name Field name (default: 'mail_template_slug')
     * @return static
     */
    public static function make(?string $name = null): static
    {
        $name = $name ?? 'mail_template_slug';
        return parent::make($name);
    }
}
