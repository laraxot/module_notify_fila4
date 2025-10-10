<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 4e2ebfb (.)
use Modules\Notify\Filament\Resources\ContactResource\Pages\ListContacts;
use Modules\Notify\Filament\Resources\ContactResource\Pages\CreateContact;
use Modules\Notify\Filament\Resources\ContactResource\Pages\EditContact;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
use Modules\Notify\Filament\Resources\ContactResource\Pages;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ContactResource extends XotBaseResource
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $model = Contact::class;
=======
    protected static ?string $model = Contact::class;
>>>>>>> b19cd40 (.)
=======
    protected static null|string $model = Contact::class;
>>>>>>> 4e2ebfb (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Get the form schema for the resource.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
     */
    #[Override]
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
>>>>>>> b19cd40 (.)
=======
     * @return array<string, Component>
     */
    #[Override]
>>>>>>> 4e2ebfb (.)
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')
                ->hint(static::trans('fields.name.hint'))
                ->required()
                ->maxLength(255),
            'email' => TextInput::make('email')
                ->hint(static::trans('fields.email.hint'))
                ->email()
                ->required()
                ->maxLength(255),
            'phone' => TextInput::make('phone')
                ->hint(static::trans('fields.phone.hint'))
                ->tel()
                ->maxLength(255),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
    public static function getRelations(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }
}
