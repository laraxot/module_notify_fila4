<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 9777d1b (.)
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateMailTemplatesTable.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class() extends XotBaseMigration {
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 9777d1b (.)
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
        });

        // -- UPDATE -- Aggiornamento della tabella esistente
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('name')) {
                $table->string('name');
            }
            if (! $this->hasColumn('slug')) {
                $table->string('slug')->unique();
            }
            if (! $this->hasColumn('params')) {
                $table->text('params')->nullable();
            }
            if (! $this->hasColumn('sms_template')) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            if (!$this->hasColumn('name')) {
                $table->string('name');
            }
            if (!$this->hasColumn('slug')) {
                $table->string('slug')->unique();
            }
            if (!$this->hasColumn('params')) {
                $table->text('params')->nullable();
            }
            if (!$this->hasColumn('sms_template')) {
>>>>>>> 75179b8 (.)
                $table->json('sms_template')->nullable();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
};
