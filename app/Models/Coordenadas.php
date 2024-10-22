<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordenadas extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $dates = ['deleted_at'];

    protected $table = 'coodenadas';


    public function persona()
    {
        return $this->belongsTo(Personas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($personas) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $personas->user_id = auth()->id();
        });
    }
}
