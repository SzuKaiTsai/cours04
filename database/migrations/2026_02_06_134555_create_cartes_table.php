<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //id, nom, description, prix, nb, image_path, categorie_id, timestamps
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')
                    ->nullable();
            $table->decimal('prix');
            $table->integer('nb');
            $table->string('image_path')
                    ->nullable();
            $table->foreignID('categorie_id')
                    ->constrained()
                    ->restrictOnUpdate()
                    ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes');
    }
};
