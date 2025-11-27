<?php

namespace App\Models;

use App\Actions\requerimientosPdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Requerimientos extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'requerimientos';


    public function personas()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getActionsAttribute()
    {
        return [
            requerimientosPdf::class,
        ];
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($requerimientos) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $requerimientos->user_id = auth()->id();

            // Calcula el saldo
        $requerimientos->saldo_payment = $requerimientos->total_payment - $requerimientos->advance_payment;

        // Genera un número autoincremental con ceros delante
        //$lastNumber = DB::table('requerimientos')->max('id'); // Suponiendo que 'id' es el campo autoincremental
        //$requerimientos->number_requerimient = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        $anioActual = date('Y');

        $lastNumber = DB::table('requerimientos')
            ->whereYear('created_at', $anioActual)
            ->max('number_requerimient');

        if (!$lastNumber) {
            $newNumber = 1;
        } else {
            $newNumber = $lastNumber + 1;
        }

        $numberFormatted = str_pad($newNumber, 6, '0', STR_PAD_LEFT);            
        $requerimientos->number_requerimient = $numberFormatted;
        });
    }

    public function scopeVisible($query)
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return $query; // Admin ve todos
        }

        return $query->where('user_id', $user->id); // Usuario normal solo ve los suyos
    }
}
