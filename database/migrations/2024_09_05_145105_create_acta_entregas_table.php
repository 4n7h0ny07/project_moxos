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
        Schema::create('acta_entregas', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('number')->nullable();
            $table->bigInteger('personas_id')->unsigned();
            $table->bigInteger('polizas_id')->unsigned();
            $table->string('sucursal')->nullable();
            $table->timestamp('fecha_entrega')->nullable();
            $table->string('type_documents')->nullable(); //
            $table->string('type_entrega')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('autorizacion')->nullable();
            $table->string('canitdad_entregada')->nullable();
            $table->text('observaciones')->nullable(); //
            $table->text('detalles')->nullable(); //
            $table->text('documents')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('personas_id')->references('id')->on('personas');
            $table->foreign('polizas_id')->references('id')->on('polizas');
            $table->string('status_at')->nullable()->default('pendientes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acta_entregas');
    }
};
