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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
return new class() extends XotBaseMigration {
=======
return new class () extends XotBaseMigration {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
return new class() extends XotBaseMigration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 9777d1b3 (.)
=======
return new class() extends XotBaseMigration {
=======
=======
return new class() extends XotBaseMigration {
=======
>>>>>>> d09cb759 (.)
=======
return new class() extends XotBaseMigration {
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 3f537838 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 3f537838 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
return new class() extends XotBaseMigration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
    // use XotBaseMigrationTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->string('lang')->nullable();
            $table->string('type')->nullable();
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
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
                $table->json('view_params')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        }); // end update
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->string('lang')->nullable();
                $table->string('type')->nullable();
                $table->string('subject')->nullable();
                $table->text('body')->nullable();
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> b93ef594b4 (.)

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('from')) {
                $table->string('from')->nullable();
            }
<<<<<<< HEAD
        ); // end update
>>>>>>> a12f125f4a (.)
=======

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
                $table->json('view_params')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        }); // end update
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
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
                    $table->json('view_params')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        ); // end update
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
    }

    // end function up
};
