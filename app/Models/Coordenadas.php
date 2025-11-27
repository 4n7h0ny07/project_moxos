<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordenadas extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'personas_id', // Asegúrate de que coincida con tu base de datos
        'user_id',
        'promotor_id', //
        'cobrador_id', //
        'latitude',
        'longitude',
        'detail_refernce'
    ];



    public function persona()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }
    public function cobrador()
    {
        return $this->belongsTo(Cobradores::class, 'cobrador_id');
    }
    public function promotor()
    {
        return $this->belongsTo(Promotores::class, 'promotor_id');
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


//INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES (NULL, 'read_coordenadas', 'coordenadas', NULL, NULL), (NULL, 'edit_coordenadas', 'coordenadas', NULL, NULL), (NULL, 'add_coordenada\r\n', 'coordenadas', NULL, NULL), (NULL, 'delete_coordenadas', 'coordenadas', NULL, NULL);