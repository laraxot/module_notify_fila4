<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 99ff506 (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateMailTemplatesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class() extends XotBaseMigration {
>>>>>>> 99ff506 (.)
=======
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE -- Definizione iniziale della tabella
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('mailable');
            $table->string('slug')->unique();
            $table->json('subject')->nullable();
            $table->json('html_template')->nullable();
            $table->json('text_template')->nullable();
            $table->string('version')->default('1.0.0');
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
        });

        // -- UPDATE -- Aggiornamento della tabella esistente
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('name')) {
=======
            if (!$this->hasColumn('name')) {
>>>>>>> 99ff506 (.)
=======
            if (!$this->hasColumn('name')) {
=======
            if (! $this->hasColumn('name')) {
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
                $table->string('name');
            }
            if ($this->hasColumn('name')) {
                $table->string('name')->nullable()->change();
            }
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('slug')) {
=======
=======
>>>>>>> 95531e1 (.)
            if (!$this->hasColumn('slug')) {
>>>>>>> 99ff506 (.)
                $table->string('slug')->unique();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
=======
            if (! $this->hasColumn('slug')) {
                $table->string('slug')->unique();
            }

            $this->updateTimestamps(table: $table, hasSoftDeletes: true);
        });
    }

>>>>>>> b19cd40 (.)
};
