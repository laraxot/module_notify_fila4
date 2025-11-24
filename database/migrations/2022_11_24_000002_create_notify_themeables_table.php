<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

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
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->nullableMorphs('model');
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $this->hasColumn('notify_theme_id')) {
=======
            if (!$this->hasColumn('notify_theme_id')) {
>>>>>>> 75179b8 (.)
=======
            if (!$this->hasColumn('notify_theme_id')) {
>>>>>>> 7148d73 (.)
                $table->integer('notify_theme_id')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
};
