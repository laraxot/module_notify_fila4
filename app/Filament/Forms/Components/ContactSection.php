<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Schemas\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;
=======
use Filament\Schemas\Components\Section;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> f5f1cb1 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
    // protected string $view = 'filament-forms::components.group';
=======
    //protected string $view = 'filament-forms::components.group';
>>>>>>> f5f1cb1 (.)

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schema */
        $schema = array_values($this->getFormSchema());
        $this->schema($schema);
        $this->columns(2);
    }

    protected function getFormSchema(): array
    {
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
