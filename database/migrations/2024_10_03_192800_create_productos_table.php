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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('images')->nullable(); //
            $table->bigInteger('type_id')->unsigned(); //
            $table->string('name_product')->nullable(); //
            $table->string('sku_product')->nullable(); //
            $table->string('cc_product')->nullable(); //
            $table->string('serial_product')->nullable(); //
            $table->string('model_product')->nullable(); //
            $table->string('details_product')->nullable(); //
            $table->string('color')->nullable(); //
            $table->text('observaciones')->nullable(); //
            $table->foreign('type_id')->references('id')->on('types');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
