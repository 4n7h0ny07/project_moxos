<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosTecnico extends Model
{
    use HasFactory;

protected $fillable = [
    'marca',
    'modelo',
    'tipo',
    'placa',
    'color',
    'km',
    'motor',
    'chasis',
    'numero_serie',
    'fecha_registro',
    'descripcion_trabajo',
    'importe', 
    'observacion'

];

    public function servicio()
    {
        return $this->belongsTo(ServiciosTecnico::class, 'servicio_id');
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
