<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
use Filament\Schemas\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;
=======
=======
>>>>>>> f813254 (.)
use Filament\Schemas\Components\Section;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Section;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> f813254 (.)
=======
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;

<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // protected string $view = 'filament-forms::components.group';
=======
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
=======
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms;
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;


// use Squire\Models\Country;

class ContactSection extends Forms\Components\Section
{
    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    //protected string $view = 'filament-forms::components.group';
>>>>>>> 99ff506 (.)

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        $this->schema($this->getFormSchema());
        $this->columns(2);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    protected function getFormSchema(): array
    {
        $res = ContactTypeEnum::getFormSchema();
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
=======
=======


=======
>>>>>>> b93ef594b4 (.)
    protected function getFormSchema(): array
    {
        $res = ContactTypeEnum::getFormSchema();
        return $res;
    }

    /*
<<<<<<< HEAD
    public function saveRelationships(): void
    {

=======
    

    protected function getFormSchema(): array
    {
        $res=ContactTypeEnum::getFormSchema(); 
        return $res;   
    }

    
    
    /*
    public function saveRelationships(): void
    {
        
>>>>>>> origin/develop
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
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
