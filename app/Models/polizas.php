<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class polizas extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($polizas) {
            if (!Auth::user()->hasPermission('polizas_create')) {
                abort(403, 'No tienes permiso para crear polizas.');
            }
        });

        static::updating(function ($polizas) {
            if (!Auth::user()->hasPermission('polizas_edit')) {
                abort(403, 'No tienes permiso para editar polizas.');
            }
        });

        static::deleting(function ($polizas) {
            if (!Auth::user()->hasPermission('polizas_delete')) {
                abort(403, 'No tienes permiso para eliminar polizas.');
            }
        });
    }
}
