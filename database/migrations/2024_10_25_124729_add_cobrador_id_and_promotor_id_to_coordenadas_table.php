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
        Schema::table('coordenadas', function (Blueprint $table) {
            //
            $table->bigInteger('cobrador_id')->unsigned()->nullable()->after('user_id'); // Nuevo campo
            $table->bigInteger('promotor_id')->unsigned()->nullable()->after('cobrador_id'); // Nuevo campo
            
            // Agregar relaciones foráneas
            $table->foreign('cobrador_id')->references('id')->on('cobradores')->onDelete('set null');
            $table->foreign('promotor_id')->references('id')->on('promotores')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coordenadas', function (Blueprint $table) {
            //
            $table->dropForeign(['cobrador_id']);
            $table->dropForeign(['promotor_id']);
            $table->dropColumn(['cobrador_id', 'promotor_id']);
        });
    }
};
