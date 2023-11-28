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
        Schema::create('imovel_proximidade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imovel_id')->unsigned();
            $table->foreign('imovel_id')->references('id')->on('imoveis');
            $table->integer('proximidade_id')->unsigned();
            $table->foreign('proximidade_id')->references('id')->on('imovel_proximidade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imovel_proximidade');
    }
};
