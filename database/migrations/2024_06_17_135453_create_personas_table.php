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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grupos_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('code')->nullable();
            $table->string('names');
            $table->string('apaterno')->nullable();
            $table->string('amaterno')->nullable();
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->string('numero_carnet')->nullable();
            $table->string('complemento')->nullable();
            $table->string('expedito')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('numero_celular')->nullable();
            $table->string('numero_telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email_work')->nullable();
            $table->string('cargo_work')->nullable();
            $table->string('salario_work')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('grupos_id')->references('id')->on('grupos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
