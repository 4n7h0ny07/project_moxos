<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotores extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'promotores';


    public function grupos()
    {
        return $this->belongsTo(Grupos::class);
    }
    public function coordenadas()
    {
        // Especifica la clave foránea 'promotor_id' si esta es la columna en 'coordenadas'
        return $this->hasOne(Coordenadas::class, 'promotor_id');
    }
}
