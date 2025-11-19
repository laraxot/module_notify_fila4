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
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // protected string $view = 'filament-forms::components.group';
=======
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
=======
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
=======


    protected function getFormSchema(): array
    {
        $res=ContactTypeEnum::getFormSchema(); 
        return $res;   
    }



    /*
    public function saveRelationships(): void
    {

        $state = $this->getState();
        $record = $this->getRecord();
        $relationship = $record->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
        }

        $record->touch();
    }
    */
    
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
}
