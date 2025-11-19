<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
    protected ?string $model_class = Contact::class;
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
return new class () extends XotBaseMigration {
    protected ?string $model_class = Contact::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 9777d1b (.)

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            $table->string('contact_type')->nullable();
            $table->string('value')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamp('verified_at')->nullable();
        });
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
            if (! $this->hasColumn('token')) {
=======
            if (!$this->hasColumn('token')) {
>>>>>>> 75179b8 (.)
                $table->string('token')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
    }
};
