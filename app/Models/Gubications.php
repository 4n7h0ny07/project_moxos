<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gubications extends Model
{
    use HasFactory;

    // En el modelo Gubication.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($ubications) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $ubications->user_id = auth()->id();
        });
    }
}
