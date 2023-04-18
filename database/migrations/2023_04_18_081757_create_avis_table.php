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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->integer('produit_id')->comment("Id du produit");
            $table->string('email')->comment("Email de l'utilisateur");
            $table->string('pseudo')->comment("Pseudo de l'utilisateur");
            $table->smallInteger('note')->comment("Note donnée par l'utilisateur");
            $table->string('commentaire')->comment("Commentaire de l'utilisateur");
            $table->string('photo')->nullable(true)->comment("Photo ajoutée par l'utilisateur");
            $table->text('description')->comment("Description du commentaire de l'utilisateur");
            $table->enum('status', ['Actif', 'En attente', 'Désactivé'])->default('En attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
