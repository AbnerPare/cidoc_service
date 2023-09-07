<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->string('Thématique');
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
        Schema::dropIfExists('resumes');
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
        
    }
};
