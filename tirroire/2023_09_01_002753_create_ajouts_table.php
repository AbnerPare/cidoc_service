<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ajouts', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->string('Localite');
            $table->string('Departement');
            $table->string('Etat');
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }
        
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajouts');
        Schema::table('ajouts', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
        
    }
};
