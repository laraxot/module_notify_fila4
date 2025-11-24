<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Tables\Columns;

use Filament\Tables\Columns\ViewColumn;
use Modules\Notify\Enums\ContactTypeEnum;

/**
 * ContactColumn - Colonna Filament riutilizzabile per rendering contatti
 *
 * Utilizza ViewColumn + Blade view per separare completamente
 * logica e presentazione seguendo i principi DRY/KISS
 *
 * PATTERN CORRETTO:
 * - ViewColumn per layout complessi
 * - Blade view separata per HTML
 * - Accessibilità WCAG 2.1 AA compliant
 *
 * @author Laraxot Team
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @version 2.0 - REFACTOR COMPLETO
 *
=======
 * @version 2.0 - REFACTOR COMPLETO
>>>>>>> 75179b8 (.)
=======
 * @version 2.0 - REFACTOR COMPLETO
>>>>>>> 7148d73 (.)
 * @since 2025-01-06
 */
class ContactColumn extends ViewColumn
{
    /**
     * View Blade per il rendering della colonna
     */
    protected string $view = 'notify::filament.tables.columns.contact';

    protected function setUp(): void
    {
        parent::setUp();

        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();

        $this->view(static::getView(), [
            'contact_types' => $contact_types,
        ])
            ->label(__('notify::columns.contact.label'))
<<<<<<< HEAD
<<<<<<< HEAD
            ->searchable()
=======
            ->searchable(ContactTypeEnum::getSearchable())
>>>>>>> 75179b8 (.)
=======
            ->searchable(ContactTypeEnum::getSearchable())
>>>>>>> 7148d73 (.)
            ->sortable(false)
            ->toggleable(isToggledHiddenByDefault: false);
    }
}
