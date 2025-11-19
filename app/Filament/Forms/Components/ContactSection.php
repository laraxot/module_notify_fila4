<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;
=======
use Filament\Schemas\Components\Section;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> 75179b8 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
    // protected string $view = 'filament-forms::components.group';
=======
    //protected string $view = 'filament-forms::components.group';
>>>>>>> 75179b8 (.)

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
        /** @var array<Htmlable|string> $schema */
        $schema = array_values($this->getFormSchema());
        $this->schema($schema);
=======
        $this->schema($this->getFormSchema());
>>>>>>> 75179b8 (.)
        $this->columns(2);
    }

    protected function getFormSchema(): array
    {
<<<<<<< HEAD
        return ContactTypeEnum::getFormSchema();
=======
        $res = ContactTypeEnum::getFormSchema();
        return $res;
>>>>>>> 75179b8 (.)
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
