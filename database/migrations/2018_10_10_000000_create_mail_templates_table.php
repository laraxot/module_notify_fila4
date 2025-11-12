<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateThemesTable.
 */
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
    // use XotBaseMigrationTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->string('mailable');
            $table->text('subject')->nullable();
            $table->longText('html_template');
            $table->longText('text_template')->nullable();
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->string('mailable');
                $table->text('subject')->nullable();
                $table->longText('html_template');
                $table->longText('text_template')->nullable();
                
            }
        );

         // -- UPDATE --
         $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
    }
};
