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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned();
            $table->timestamp('date_in')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->text('description')->nullable();
            $table->text('observation')->nullable();
            $table->text('document')->nullable();
            $table->text('images')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamp('next_appointment')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
