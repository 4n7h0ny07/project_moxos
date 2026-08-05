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
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personas_id')->unsigned();
            $table->string('code');
            $table->string('marca')->default('Generica');
            $table->string('modelo')->nullable();
            $table->string('name');
            $table->string('host')->nullable();
            $table->string('description')->nullable();
            $table->string('ip')->nullable();
            $table->string('images')->nullable();
            $table->enum('status', ['alta','baja'])->default('alta');
            $table->date('date_compra')->nullable();
            $table->date('date_alta')->nullable();
            $table->date('date_baja')->nullable();
            $table->float('coste', 10,2)->nullable();
            $table->string('serialnumber')->nullable();
            $table->string('observations')->nullable();
            $table->integer('vidautil')->nullable();
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
        Schema::dropIfExists('activos');
    }
};
