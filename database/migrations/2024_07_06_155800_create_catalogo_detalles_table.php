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
        Schema::create('catalogo_detalles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('catalogo_id')->unsigned();
            $table->string('portada')->nullable();
            $table->string('images')->nullable();
            $table->foreign('catalogo_id')->references('id')->on('catalogos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_detalles');
    }
};
