<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'personas_id',
        'code',
        'name',
        'host',
        'description',
        'ip',
        'images',
        'status',
        'date_compra',
        'date_alta',
        'date_baja',
        'coste',
        'serialnumber',
        'observations',
        'vidautil',
        'user_id',
    ];

    public function personas()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($activo) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $activo->user_id = auth()->id();
        });
    }
}
