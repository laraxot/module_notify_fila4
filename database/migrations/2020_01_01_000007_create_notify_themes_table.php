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
    // use XotBaseMigrationTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->string('lang')->nullable();
            $table->string('type')->nullable();
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
            if (! $this->hasColumn('from')) {
                $table->string('from')->nullable();
            }

            if (! $this->hasColumn('post_type')) {
                $table->nullableMorphs('post');
            }

            if (! $this->hasColumn('body_html')) {
                $table->text('body_html')->nullable();
            }

            if (! $this->hasColumn('theme')) {
                $table->string('theme')->nullable();
            }

            if (! $this->hasColumn('from_email')) {
                $table->string('from_email')->nullable();
            }

            if (! $this->hasColumn('logo_src')) {
                $table->string('logo_src')->nullable();
            }

            if (! $this->hasColumn('logo_width')) {
                $table->integer('logo_width')->nullable();
            }

            if (! $this->hasColumn('logo_height')) {
                $table->integer('logo_height')->nullable();
            }

            if (! $this->hasColumn('view_params')) {
=======
            if (!$this->hasColumn('from')) {
                $table->string('from')->nullable();
            }

            if (!$this->hasColumn('post_type')) {
                $table->nullableMorphs('post');
            }

            if (!$this->hasColumn('body_html')) {
                $table->text('body_html')->nullable();
            }

            if (!$this->hasColumn('theme')) {
                $table->string('theme')->nullable();
            }

            if (!$this->hasColumn('from_email')) {
                $table->string('from_email')->nullable();
            }

            if (!$this->hasColumn('logo_src')) {
                $table->string('logo_src')->nullable();
            }

            if (!$this->hasColumn('logo_width')) {
                $table->integer('logo_width')->nullable();
            }

            if (!$this->hasColumn('logo_height')) {
                $table->integer('logo_height')->nullable();
            }

            if (!$this->hasColumn('view_params')) {
>>>>>>> 99ff506 (.)
                $table->json('view_params')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        }); // end update
    }

    // end function up
};
