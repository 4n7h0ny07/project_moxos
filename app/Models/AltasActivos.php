<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AltasActivos extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'altas_activos';


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

        static::creating(function ($altasactivos) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $altasactivos->user_id = auth()->id();


            // Genera un número autoincremental con ceros delante
        $lastNumber = DB::table('altas_activos')->max('id'); // Suponiendo que 'id' es el campo autoincremental
        $altasactivos->numero_activo = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        });
    }
}
