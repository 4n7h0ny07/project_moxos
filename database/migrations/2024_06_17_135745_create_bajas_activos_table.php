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
        Schema::create('bajas_activos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personas_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('numero_baja')->nullable();
            $table->string('name_activo')->nullable();
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->string('serial')->nullable();
            $table->string('file')->nullable();
            $table->string('adjunto_file')->nullable();
            $table->text('observation')->nullable();
            $table->string('area')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('personas_id')->references('id')->on('personas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bajas_activos');
    }
};
