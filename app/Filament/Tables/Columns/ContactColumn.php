<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Tables\Columns;

use Filament\Tables\Columns\ViewColumn;
use Modules\Notify\Enums\ContactTypeEnum;

/**
 * ContactColumn - Colonna Filament riutilizzabile per rendering contatti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 *
 * Utilizza ViewColumn + Blade view per separare completamente
 * logica e presentazione seguendo i principi DRY/KISS
 *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
 * 
 * Utilizza ViewColumn + Blade view per separare completamente 
 * logica e presentazione seguendo i principi DRY/KISS
 * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 *
 * Utilizza ViewColumn + Blade view per separare completamente
 * logica e presentazione seguendo i principi DRY/KISS
 *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
 * PATTERN CORRETTO:
 * - ViewColumn per layout complessi
 * - Blade view separata per HTML
 * - Accessibilità WCAG 2.1 AA compliant
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
 * @author Laraxot Team
 *
 * @version 2.0 - REFACTOR COMPLETO
 *
 * @since 2025-01-06
 */
class ContactColumn extends ViewColumn
{
    /**
     * View Blade per il rendering della colonna
     */
    protected string $view = 'notify::filament.tables.columns.contact';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

    protected function setUp(): void
    {
        parent::setUp();

        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();

        /** @var array<string> $searchableArray */
        $searchableArray = ContactTypeEnum::getSearchable();

        $this->view(static::getView(), [
            'contact_types' => $contact_types,
        ])
<<<<<<< HEAD
=======
=======
    
=======

>>>>>>> b93ef594b4 (.)
    protected function setUp(): void
    {
        parent::setUp();

        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();

        $this->view(static::getView(), [
<<<<<<< HEAD
                'contact_types' => $contact_types,
            ])
>>>>>>> a12f125f4a (.)
=======
            'contact_types' => $contact_types,
        ])
>>>>>>> b93ef594b4 (.)
=======
    
    protected function setUp(): void
    {
        parent::setUp();
        
        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();
        
        $this->view(static::getView(), [
                'contact_types' => $contact_types,
            ])
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ->label(__('notify::columns.contact.label'))
            ->searchable($searchableArray)
            ->sortable(false)
            ->toggleable(isToggledHiddenByDefault: false);
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
