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
        Schema::create('servicios_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personas_id');
            $table->unsignedBigInteger('user_id'); // técnico que registró
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo')->nullable();
            $table->string('placa')->nullable();
            $table->string('color')->nullable();
            $table->integer('km')->nullable();
            $table->string('motor')->nullable();
            $table->string('chasis')->nullable();
            $table->string('numero_serie')->nullable();
            $table->date('fecha_registro')->default(now());
            $table->string('descripcion_trabajo')->nullable();
            $table->decimal('importe', 10, 2)->nullable();
            $table->text('observacion')->nullable();
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_tecnicos');
    }
};
