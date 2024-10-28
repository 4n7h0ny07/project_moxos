<?php

namespace App\Models;

use App\Actions\certificatePdf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\VoyagerUser;

class Personas extends Model
{
    use HasFactory, SoftDeletes, VoyagerUser;

    protected $dates = ['deleted_at'];

    protected $table = 'personas'; //

    public function getActions()
    {
        return [
            certificatePdf::class,
        ];
    }

    // Modelo Persona.php
    public function coordenadas()
    {
        return $this->hasOne(Coordenadas::class);
    }

    public function grupos()
    {
        return $this->belongsTo(Grupos::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function requerimientos()
    {
        return $this->hasMany(Requerimientos::class, 'personas_id');
    }

    public function vacations()
    {
        return $this->hasMany(Vacations::class, 'personas_id');
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
