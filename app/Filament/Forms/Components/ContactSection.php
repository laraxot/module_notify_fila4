<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schema */
        $schema = array_values($this->getFormSchema());
        $this->schema($schema);
        $this->columns(2);
    }

    protected function getFormSchema(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return ContactTypeEnum::getFormSchema();
=======
        $res = ContactTypeEnum::getFormSchema();

        return $res;
>>>>>>> 8bc2fc9f (first)
=======
        return ContactTypeEnum::getFormSchema();
>>>>>>> 20a3d3b (.)
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
