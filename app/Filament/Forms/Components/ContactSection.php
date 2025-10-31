<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

use Filament\Forms;
use Filament\Schemas\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;

// use Squire\Models\Country;

class ContactSection extends Section
{
    // protected string $view = 'filament-forms::components.group';

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        $this->schema($this->getFormSchema());
        $this->columns(2);
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
    protected function getFormSchema(): array
    {
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $res */
        $res = ContactTypeEnum::getFormSchema();

        return $res;
    }

    /*
     * public function saveRelationships(): void
     * {
     *
     * $state = $this->getState();
     * $record = $this->getRecord();
     * $relationship = $record->{$this->getRelationship()}();
     *
     * if (null === $relationship) {
     * return;
     * }
     * if ($address = $relationship->first()) {
     * $address->update($state);
     * } else {
     * $relationship->updateOrCreate($state);
     * }
     *
     * $record->touch();
     * }
     */
}
