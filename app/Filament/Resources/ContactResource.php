<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Notify\Filament\Resources\ContactResource\Pages\CreateContact;
use Modules\Notify\Filament\Resources\ContactResource\Pages\EditContact;
use Modules\Notify\Filament\Resources\ContactResource\Pages\ListContacts;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Filament\Schemas\Components\Component;
=======
>>>>>>> 7148d73 (.)
use Override;
use Modules\Notify\Filament\Resources\ContactResource\Pages\ListContacts;
use Modules\Notify\Filament\Resources\ContactResource\Pages\CreateContact;
use Modules\Notify\Filament\Resources\ContactResource\Pages\EditContact;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
use Modules\Notify\Filament\Resources\ContactResource\Pages;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ContactResource extends XotBaseResource
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $model = Contact::class;
=======
    protected static null|string $model = Contact::class;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    protected static null|string $model = Contact::class;
=======
    protected static ?string $model = Contact::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected static null|string $model = Contact::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    protected static null|string $model = Contact::class;
>>>>>>> 9777d1b (.)
=======
    protected static null|string $model = Contact::class;
>>>>>>> 7148d73 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Get the form schema for the resource.
     *
<<<<<<< HEAD
     * @return array<string, Component>
     */
<<<<<<< HEAD
=======
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
     * @return array<string, Component>
     */
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    #[Override]
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    #[Override]
>>>>>>> 9777d1b (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
    public static function getRelations(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    #[Override]
>>>>>>> 9777d1b (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }
}
