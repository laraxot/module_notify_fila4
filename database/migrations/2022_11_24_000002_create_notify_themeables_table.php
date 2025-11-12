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
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->nullableMorphs('model');
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
            if (! $this->hasColumn('notify_theme_id')) {
=======
            if (!$this->hasColumn('notify_theme_id')) {
>>>>>>> 99ff506 (.)
                $table->integer('notify_theme_id')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->nullableMorphs('model');
            }
        );
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('notify_theme_id')) {
                $table->integer('notify_theme_id')->nullable();
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
=======
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('notify_theme_id')) {
                    $table->integer('notify_theme_id')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
};
