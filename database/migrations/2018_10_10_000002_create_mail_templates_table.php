<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateMailTemplatesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
return new class() extends XotBaseMigration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
        });

        // -- UPDATE -- Aggiornamento della tabella esistente
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            if (!$this->hasColumn('name')) {
                $table->string('name');
            }
            if (!$this->hasColumn('slug')) {
                $table->string('slug')->unique();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
            if (! $this->hasColumn('name')) {
                $table->string('name');
            }
            if (! $this->hasColumn('slug')) {
                $table->string('slug')->unique();
            }

            $this->updateTimestamps(table: $table, hasSoftDeletes: true);
        });
    }

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
};
