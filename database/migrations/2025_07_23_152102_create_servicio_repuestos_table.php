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
        Schema::create('servicio_repuestos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicio_id');        
            $table->string('codigo')->nullable();
            $table->string('detalle');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->decimal('importe', 10, 2);
            $table->text('observacion')->nullable();       
            $table->foreign('servicio_id')->references('id')->on('servicios_tecnicos')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_repuestos');
    }
};
