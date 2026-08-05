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
        Schema::create('quote_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')
                ->constrained('quotes')
                ->cascadeOnDelete();
            $table->foreignId('producto_id')
                ->constrained('productos');
            $table->string('product_name');
            $table->integer('quantity')->default(1);
            $table->decimal('product_price', 10, 2);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax', 10, 2)->default(0);
            $table->text('observations')->nullable();
            $table->foreignId('user_id')
                ->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_details');
    }
};
