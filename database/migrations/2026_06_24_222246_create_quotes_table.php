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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned();
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->string('quote_number');
            $table->string('currency', 5)->default('BOB');
            $table->decimal('total_price',10,2);
            $table->decimal('total_discount',10,2);
            $table->string('quote_status')->default('pending'); //pending,  draft, send,  approved, rejected
            $table->string('observations')->nullable();
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
        Schema::dropIfExists('quotes');
    }
};
