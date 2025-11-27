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
        Schema::table('promotores', function (Blueprint $table) {
            $table->string('contact_number')->nullable(); // Número de contacto
            $table->string('whatsapp_link')->nullable();  // Enlace de WhatsApp
            $table->string('image')->nullable();          // Imagen
            $table->string('facebook_link')->nullable();  // Enlace de Facebook
            $table->string('instagram_link')->nullable(); // Enlace de Instagram
            $table->string('tiktok_link')->nullable();    // Enlace de TikTok
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('promotores', function (Blueprint $table) {
            $table->dropColumn([
                'contact_number',
                'whatsapp_link',
                'image',
                'facebook_link',
                'instagram_link',
                'tiktok_link',
            ]);
        });
    }
};
