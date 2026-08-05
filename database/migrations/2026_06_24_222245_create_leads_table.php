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
        Schema::create('leads', function (Blueprint $table) {

            $table->id();
            $table->foreignId('persona_id')
                ->constrained('personas')
                ->cascadeOnDelete();
            $table->string('lead_code')->unique();
            $table->integer('lead_number')->nullable();
            $table->decimal('estimated_budget', 10, 2)->nullable();
            $table->enum('lead_status', [
                'new',
                'cold',
                'warm',
                'hot',
                'sale_closed'
            ])->default('new');
            $table->text('interest')->nullable();
            $table->foreignId('cobrador_id')
                ->constrained('cobradores');
            $table->foreignId('promotor_id')
                ->constrained('promotores');
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
        Schema::dropIfExists('leads');
    }
};
