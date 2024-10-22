<?php

namespace App\Models;

use App\Actions\finiquitoPdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class finiquito extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'finiquitos';

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
            finiquitoPdf::class,
        ];
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($finiquitos) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $finiquitos->user_id = auth()->id();
            // Calcula el saldo
            //$finiquitos->saldo_payment = $finiquitos->total_payment - $finiquitos->advance_payment;

            $vinculacion = Carbon::createFromDate($finiquitos->fecha_incio);
            $desvinculacion = Carbon::createFromDate($finiquitos->fecha_fin);

            $diferencia = $vinculacion->diff($desvinculacion);
            // $anios = $vinculacion->diffInYears($desvinculacion);
            // $meses = $vinculacion->diffInMonths($desvinculacion) % 12;
            // $dias = $vinculacion->diffInDays($desvinculacion) % 30;  // Aproximado


            $anios = $diferencia->y;
            $meses = $diferencia->m;
            $dias = $diferencia->d;

            $finiquitos->anios = $anios;
            $finiquitos->meses = $meses;
            $finiquitos->dias =  $dias;

           // dd($finiquitos->fecha_inicio, $finiquitos->fecha_fin, $vinculacion, $desvinculacion, $anios, $meses, $dias);
           //dd(request()->all());

            //sumatoria del mes primer mes
            $mes_uno = $finiquitos->salario_uno + $finiquitos->antiguedad_uno + $finiquitos->bono_uno + $finiquitos->bono_uno + $finiquitos->otros_uno;
            $mes_dos = $finiquitos->salario_dos + $finiquitos->antiguedad_dos + $finiquitos->bono_dos + $finiquitos->bono_dos + $finiquitos->otros_dos;
            $mes_tres = $finiquitos->salario_tres + $finiquitos->antiguedad_tres + $finiquitos->bono_tres + $finiquitos->bono_tres + $finiquitos->otros_tres;
            //calculo del promedio mensual del finiquitos
            $promedio = ($mes_uno + $mes_dos + $mes_tres) / 3;

            $finiquitos->promedio = $promedio;
            $finiquitos->vacations_pay = ($promedio / 30) * $finiquitos->vacations;








            // Genera un número autoincremental con ceros delante
            $lastNumber = DB::table('finiquitos')->max('id'); // Suponiendo que 'id' es el campo autoincremental
            $finiquitos->number = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        });


        /// funcion updating

        static::updating(function ($finiquitos) {
            /// calcular los dias, meses y años de trabajo en la empresa

            $vinculacion = Carbon::createFromDate($finiquitos->fecha_incio);
            $desvinculacion = Carbon::createFromDate($finiquitos->fecha_fin);

            $diferencia = $vinculacion->diff($desvinculacion);

            //$anios = $vinculacion->diffInYears($desvinculacion);
            //$meses = $vinculacion->diffInMonths($desvinculacion) % 12;
            //$dias = $vinculacion->diffInDays($desvinculacion) % 30;  // Aproximado

            $anios = $diferencia->y;
            $meses = $diferencia->m;
            $dias = $diferencia->d;

            $finiquitos->anios = $anios;
            $finiquitos->meses = $meses;
            $finiquitos->dias =  $dias;

            $finiquitos->aguinaldo_pay = ($finiquitos->promedio / 12) * $meses;

            //dd($vinculacion, $desvinculacion, $finiquitos->meses, $diferencia);
        });
    }
}
