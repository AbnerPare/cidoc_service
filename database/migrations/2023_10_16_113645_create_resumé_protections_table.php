<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('resumé_protections', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->string('pdf_path')->nullable();
            $table->string('Etat');
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
        Schema::dropIfExists('resumé_protections');
        Schema::table('resumé_protections', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
        
    }
};
