<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\finiquito;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FiniquitoController extends Controller
{
    //

    public function generatePdf($id)
    {

        $finiquitos = finiquito::with(['personas', 'user'])->findOrfail($id);


        // Obtener la URL del logo
        $logoBolivia = setting('configuracion.img_bolivia');
        $logoMinisterio = setting('configuracion.img_trabajo');
        $razonSocial = setting('configuracion.razon_social');
        $address = setting('configuracion.address');

        //obtener la edad del empleado
        $edad = Carbon::parse($finiquitos->personas->fecha_nacimiento)->age;

        //obtener los ultiomos tres meses con los nombres y el año
        $fecha = Carbon::createFromFormat('Y-m-d', $finiquitos->fecha_fin);

        $mes_uno = $fecha->subMonthNoOverflow(2)->format('F-Y');

        // Mes 2: dos meses atrás
        $mes_dos = $fecha->addMonth()->format('F-Y');

        // Mes 3: un mes atrás
        $mes_tres = $fecha->addMonth()->format('F-Y');

        //fecha de retiro
        $primerDiaDelAno = Carbon::parse($finiquitos->fecha_fin)->startOfYear();

        $fechaRetiro = Carbon::parse($finiquitos->fecha_fin);

        $months= $primerDiaDelAno->diffInMonths($finiquitos->fecha_fin);
        $dais= $primerDiaDelAno->diffInDays($fechaRetiro->copy()->subMonth($months));



        //datos para pasar a la vista
        $data = [
            'finiquitos' => $finiquitos,
            'logoBolivia' => $logoBolivia,
            'logoMinisterio' => $logoMinisterio,
            'razonSocial' => $razonSocial,
            'address' => $address,
            'edad' => $edad,
            'mes_uno' => $mes_uno,
            'mes_dos' => $mes_dos,
            'mes_tres' => $mes_tres,
            'months' => $months,
            'dais' => $dais
        ];

        $pdf = PDF::loadView('pdf.finiquitos', $data)
            ->setPaper('office');

        //return $pdf->download('frm_15' . $finiquitos->number . '.pdf');
        return $pdf->stream('frm_15' . $finiquitos->number . '.pdf');
    }
}
