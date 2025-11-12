<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> e11621f (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateMailTemplatesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class() extends XotBaseMigration {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> e11621f (.)
=======
return new class() extends XotBaseMigration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> a12f125f4a (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
=======
return new class () extends XotBaseMigration {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        });

        // -- UPDATE -- Aggiornamento della tabella esistente
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('name')) {
                $table->string('name');
            }
            if (! $this->hasColumn('slug')) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            if (!$this->hasColumn('name')) {
                $table->string('name');
            }
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
<<<<<<< HEAD
=======
=======
            if (! $this->hasColumn('name')) {
=======
            if (!$this->hasColumn('name')) {
>>>>>>> b93ef594b4 (.)
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

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
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

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
};
