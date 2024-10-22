<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\VoyagerUser;

class types extends Model
{
    use HasFactory, SoftDeletes, VoyagerUser;

    protected $dates = ['deleted_at'];

    protected $table = 'types';

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }

    public function marcas()
    {
        return $this->belongsTo(Marca::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($types) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $types->user_id = auth()->id();

        });
    }
}
