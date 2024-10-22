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
        Schema::create('finiquitos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personas_id')->unsigned();
            $table->string('number')->nullable();
            $table->timestamp('fecha_inicio')->nullable(); // Fecha de inicio de vacaciones
            $table->timestamp('fecha_fin')->nullable(); // Fecha de fin de vacaciones
            $table->float('salario_uno', 10, 2)->nullable();
            $table->float('salario_dos', 10, 2)->nullable();
            $table->float('salario_tres', 10, 2)->nullable();
            $table->float('antiguedad_uno', 10, 2)->nullable();
            $table->float('antiguedad_dos', 10, 2)->nullable();
            $table->float('antiguedad_tres', 10, 2)->nullable();
            $table->float('bono_uno', 10, 2)->nullable();
            $table->float('bono_dos', 10, 2)->nullable();
            $table->float('bono_tres', 10, 2)->nullable();
            $table->float('comisiones_uno', 10, 2)->nullable();
            $table->float('comisiones_dos', 10, 2)->nullable();
            $table->float('comisiones_tres', 10, 2)->nullable();
            $table->float('otros_uno', 10, 2)->nullable();
            $table->float('otros_dos', 10, 2)->nullable();
            $table->float('otros_tres', 10, 2)->nullable();
            $table->integer('anios')->nullable(); //numero de dias 
            $table->integer('meses')->nullable(); //numero de dias 
            $table->integer('dias')->nullable(); //numero de dias 
            $table->float('promedio', 10, 2)->nullable();
            $table->string('area')->nullable();
            $table->string('cargo')->nullable();
            $table->string('vacations')->nullable();
            $table->float('vacations_pay', 10, 2)->nullable();
            $table->float('prima_pay', 10, 2)->nullable();
            $table->float('aguinaldo_pay', 10, 2)->nullable();
            $table->float('oter_pay', 10, 2)->nullable();
            $table->float('deductions_one', 10, 2)->nullable();
            $table->float('deductions_two', 10, 2)->nullable();
            $table->float('deductions_three', 10, 2)->nullable();
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('finiquitos');
    }
};
