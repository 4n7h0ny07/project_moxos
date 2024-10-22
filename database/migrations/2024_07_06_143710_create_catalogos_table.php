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
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('va_ide_alm');
            $table->string('va_nom_alm');
            $table->string('va_lin_nv1');
            $table->string('va_nom_nv1');
            $table->string('va_lin_nv2');
            $table->string('va_nom_nv2');
            $table->string('va_lin_nv3');
            $table->string('va_nom_nv3');
            $table->string('va_cod_pro');
            $table->string('va_nom_pro');
            $table->string('va_ide_uni');
            $table->integer('va_can_cup');
            $table->decimal('va_cto_inv', 8, 2);
            $table->integer('va_exi_cun');
            $table->string('va_lin_nv4');
            $table->string('va_nom_nv4');
            $table->string('va_ide_ubi');
            $table->string('Codigo_SKU');
            $table->string('Codigo_Barras');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
