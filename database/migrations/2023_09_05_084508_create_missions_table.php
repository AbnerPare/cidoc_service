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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mission_id'); // L'ID de la mission associée
            $table->string('etat'); // État de la demande (en attente, validée, rejetée, etc.)
            $table->unsignedBigInteger('Directeur_id'); // L'ID du directeur responsable de la validation
            $table->text('Commentaire')->nullable(); // Commentaire du directeur (optionnel)
            $table->string('Date_du_remplissage');
            $table->string('N°1');
            $table->string('N°2');
            $table->string('N°3');
            $table->string('Partenaire');
            $table->string('Project');
            $table->string('Objet');
            $table->string('Lieu');
            $table->string('Région');
            $table->string('Prémière');
            $table->string('Deuxième');
            $table->string('Troisième');
            $table->string('Conducteur');
            $table->string('Tel-cond');
            $table->string('Véhicule');
            $table->string('Immatriculation');
            $table->string('Départ');
            $table->string('Rétour');
              $table->timestamps();


              $table->foreign('mission_id')->references('id')->on('missions');
            $table->foreign('directeur_id')->references('id')->on('directeurs');

            // Index
            $table->index(['mission_id', 'directeur_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
