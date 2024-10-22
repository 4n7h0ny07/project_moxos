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
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personas_id')->unsigned();
            $table->string('number_requerimient')->nullable();
            $table->string('type_requerimient')->nullable();
            $table->string('currency_requerimient')->nullable();
            $table->string('images_requerimient')->nullable();
            $table->decimal('advance_payment', 10, 2)->nullable();
            $table->decimal('total_payment', 10, 2)->nullable();
            $table->decimal('saldo_payment', 10, 2)->nullable();
            $table->string('document_requerimient')->nullable();
            $table->string('detail_requerimient')->nullable();
            $table->string('observation_requerimient')->nullable();
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
        Schema::dropIfExists('requerimientos');
    }
};
