<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fiches_de_congés', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('pdf_path')->nullable();
            $table->string('Date');
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
        Schema::dropIfExists('fiches_de_congés');
        Schema::table('fiches_de_congés', function (Blueprint $table) {
            $table->dropColumn('pdf_path');
        });
        
    }
};
