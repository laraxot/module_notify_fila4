<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

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
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->nullableMorphs('model');
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('notify_theme_id')) {
                $table->integer('notify_theme_id')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->nullableMorphs('model');
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('notify_theme_id')) {
                    $table->integer('notify_theme_id')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
};
