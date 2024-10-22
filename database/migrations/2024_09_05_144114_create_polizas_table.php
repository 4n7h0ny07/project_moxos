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
        Schema::create('polizas', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no')->nullable(); // REF. NO.
            $table->integer('num_imp')->nullable(); // Nº Imp
            $table->string('mes')->nullable(); // Mes
            $table->string('model')->nullable(); // MODEL
            $table->string('chasis')->nullable(); // CHASIS
            $table->string('motor')->nullable(); // MOTOR
            $table->string('color')->nullable(); // COLOR
            $table->string('planilla_gastos')->nullable(); // PLANILLA GASTOS
            $table->string('numero_poliza')->nullable(); // NUMERO POLIZA
            $table->decimal('precio_poliza', 10, 2)->nullable(); // Precio Poliza
            $table->string('entregado_a')->nullable(); // ENTREGADO A :
            $table->string('aep')->nullable(); // AEP
            $table->date('fecha')->nullable(); // FECHA
            $table->integer('num_copias')->nullable(); // Nª COPIAS
            $table->integer('legalizadas')->nullable(); // LEGALIZADAS
            $table->text('detalle')->nullable(); // DETALLE
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polizas');
    }
};
