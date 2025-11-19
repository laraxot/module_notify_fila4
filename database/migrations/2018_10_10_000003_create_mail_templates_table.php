<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
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
>>>>>>> 75179b8 (.)
=======
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
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
>>>>>>> 75179b8 (.)
=======
            if (!$this->hasColumn('name')) {
=======
            if (! $this->hasColumn('name')) {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
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
>>>>>>> 82ae73b (.)
            if (!$this->hasColumn('slug')) {
>>>>>>> 75179b8 (.)
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
