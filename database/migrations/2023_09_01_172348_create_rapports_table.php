<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->string('Localité');
            $table->string('Durabilité');
            $table->string('Département');
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
        Schema::dropIfExists('rapports');
        Schema::table('rapports', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
        
    }
};
