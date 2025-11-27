<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosRepuesto extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicio_id',
        'codigo',
        'cantidad',
        'precio_unitario',
        'importe',
        'observcacion'
    ];

    public function Persona()
    {
        return $this->belongsTo(Personas::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function repuestos()
    {
        return $this->hasMany(ServiciosRepuesto::class, 'servicio_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($marcas) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $marcas->user_id = auth()->id();

        });
    }
}
