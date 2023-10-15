<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('etat')->default(0);
            $table->unsignedBigInteger('directeur_id')->nullable();
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
            $table->string('Tel_cond');
            $table->string('Véhicule');
            $table->string('Immatriculation');
            $table->string('Départ');
            $table->string('Rétour');
            $table->timestamps();
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
