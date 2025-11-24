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
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
>>>>>>> 7148d73 (.)
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
=======
return new class() extends XotBaseMigration {
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
            if (! $this->hasColumn('name')) {
=======
            if (!$this->hasColumn('name')) {
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
            if (!$this->hasColumn('name')) {
=======
            if (! $this->hasColumn('name')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            if (!$this->hasColumn('name')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
            if (!$this->hasColumn('name')) {
>>>>>>> 9777d1b (.)
=======
            if (!$this->hasColumn('name')) {
>>>>>>> 7148d73 (.)
                $table->string('name');
            }
            if ($this->hasColumn('name')) {
                $table->string('name')->nullable()->change();
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('slug')) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            if (!$this->hasColumn('slug')) {
>>>>>>> 75179b8 (.)
=======
            if (!$this->hasColumn('slug')) {
>>>>>>> 7148d73 (.)
                $table->string('slug')->unique();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
};
