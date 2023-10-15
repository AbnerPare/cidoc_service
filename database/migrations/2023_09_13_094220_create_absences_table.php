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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            //$table->string('Etat')->default(false); // État de la demande (en attente, validée, rejetée, etc.)
           $table->string('Nom');
            $table->string('Prénom');
            $table->string('Fonction');
            $table->string('Type_de_congé');
            $table->string('Periode_du');
            $table->string('Date_de_fin');
            $table->string('Nombre_de_jour');
            $table->string('Période_de_non_disponibilité');
            $table->string('Signature_du_demandeur');
            $table->string('Date_du_remplissage');
            $table->string('Etat_1');
            $table->string('Date_de_l_avis_du_sup');
            $table->string('Signature_du_sup');
            $table->string('Etat_2');
            $table->string('Date_de_l_avis_du_coordo');
            $table->string('Signature_du_coordo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
