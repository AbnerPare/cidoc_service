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
            $table->string('date');
            $table->string('numéro1');
            $table->string('numéro2');
            $table->string('numéro3');
            $table->string('project');
            $table->string('objet');
            $table->string('lieu');
            $table->string('région');
            $table->string('1personne');
            $table->string('2personne');
            $table->string('3personne');
            $table->string('conducteur');
            $table->string('tel-cond');
            $table->string('véhicule');
            $table->string('immatriculation');
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
