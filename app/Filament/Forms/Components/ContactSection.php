<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Forms\Components;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Section;
>>>>>>> f813254 (.)
use Filament\Forms;
use Filament\Schemas\Components\Section;
use Modules\Notify\Enums\ContactTypeEnum;
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
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

>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\ContactTypeEnum;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

// use Squire\Models\Country;

class ContactSection extends Section
{
<<<<<<< HEAD
    // protected string $view = 'filament-forms::components.group';
=======
<<<<<<< HEAD
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
    //protected string $view = 'filament-forms::components.group';
>>>>>>> f813254 (.)

    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schema */
        $schema = array_values($this->getFormSchema());
        $this->schema($schema);
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
