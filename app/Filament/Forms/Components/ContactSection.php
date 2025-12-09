<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

use Filament\Schemas\Components\Section;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;

>>>>>>> b19cd40 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> 75179b85 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
    //protected string $view = 'filament-forms::components.group';

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
<<<<<<< HEAD
        $schema = $this->getFormSchema();
        $this->schema($schema);
        $this->columns(2);
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput>
     */
    protected function getFormSchema(): array
    {
        return ContactTypeEnum::getFormSchema();
=======
=======
>>>>>>> 75179b85 (.)
        $this->schema($this->getFormSchema());
        $this->columns(2);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
    protected function getFormSchema(): array
    {
        $res = ContactTypeEnum::getFormSchema();
        return $res;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> 75179b85 (.)
}
