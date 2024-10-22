<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personas_id')->unsigned();
            $table->string('number')->nullable();
            $table->date('periodo_inicio')->nullable();
            $table->date('periodo_fin')->nullable();
            $table->date('fecha_incio')->nullable(); // Fecha de inicio de vacaciones
            $table->date('fecha_fin')->nullable(); // Fecha de fin de vacaciones
            $table->string('dias')->nullable(); //numero de dias 
            $table->string('sucursal')->nullable();
            $table->string('area')->nullable();
            $table->string('cargo')->nullable();
            $table->string('type_vacations')->nullable(); //Vacacion tipos
            $table->string('type_solicitud')->nullable(); //
            $table->text('observaciones')->nullable(); //
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('personas_id')->references('id')->on('personas');
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
        Schema::dropIfExists('vacations');
    }
};
