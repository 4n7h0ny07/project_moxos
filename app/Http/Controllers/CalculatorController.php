<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('page.calculator');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function calcular(Request $request)
    {
        $precioContado = $request->input('precio_contado');
        $cuotaInicial = $request->input('cuota_inicial');
        $meses = $request->input('meses');
        $tipoCredito = $request->input('tipo_credito');

        // Definir la tasa de interés según el tipo de crédito
        switch ($tipoCredito) {
            case 'serna':
                if ($precioContado < 3000.99 && $meses <= 20) {
                    $tasaInteres = setting('calculadora.motos_serna') / 100; // 3.5%
                    $extra = setting('calculadora.otros_costos');
                } else {
                    return redirect()->back()->with('error', 'El precio contado debe ser menor o igual a 2499.99.');
                }

                break;
            case 'gama_media':
                if ($precioContado > 3000 && $precioContado < 5999.99 && $meses <= 24) {
                    $tasaInteres = setting('calculadora.motos_media_benelli') / 100; // 3.5%
                    $extra = setting('calculadora.otros_costos');
                } else {
                    return redirect()->back()->with('error', 'El precio contado debe estar entre 2.500.00 y 4.999,99');
                }

                break;
            case 'bicicletas':
                $tasaInteres = setting('calculadora.bicicletas_bike') / 100; // 3%
                $extra = setting('calculadora.otros_costos');
                break;
            case 'benelli':
                if ($precioContado > 5999.99 && $meses <= 24) {
                    $tasaInteres = setting('calculadora.motos_benelli') / 100; // 3%
                    $extra = setting('calculadora.otros_costos');
                } else {
                    return redirect()->back()->with('error', 'El precio contado debe estar entre 5.000,00 y 99.999,99');
                }

                break;
            case 'electrodomesticos_muebles':
                if ($meses > 8 ) {
                    if ($meses <= 24 && $precioContado < 4500.99) {
                        $tasaInteres = setting('calculadora.electrodomesticos') / 100; // 3.5% si las cuotas son mayores a 8
                        $extra = 0;
                    }else{
                        return redirect()->back()->with('error', 'No es posible hacer el calculo no se cumplen los requisitos');
                    }
                    
                } else{
                    if ($precioContado < 4500.99) {
                        $tasaInteres = 0; // 3.5% si las cuotas son mayores a 8
                        $extra = 0;
                    }else{
                        return redirect()->back()->with('error', 'No es posible hacer el calculo no se cumplen los requisitos');
                    }
                }
                break;
            default:
                $tasaInteres = 0.03; // Tasa predeterminada
        }

        // Calcular el monto a financiar
        $saldo = $precioContado - $cuotaInicial;
        ///calcula el inters interno 
        $interesinterno = $tasaInteres * $meses;
        //calcula el interes
        $interes = ($saldo * $interesinterno) + $extra;

        $saldoCredito = $saldo + $interes;

        // calcula el monto del crédito con la tasa de interés
        $totalCredito =  $saldoCredito + $cuotaInicial;

        // Calcular el pago mensual
        $pagoMensual = $saldoCredito / $meses;
        $logoBolivia = setting('site.logo');
        // Datos adicionales para el PDF
        $company_name = setting('admin.title');  // Nombre de tu empresa
        $date = Carbon::now()->format('d/m/Y');  // Fecha actual
        $validity = $request->input('validity', 24);

        if (setting('printer-page.pdf') == true) {
            // Generar el PDF
            $pdf = Pdf::loadView('pdf/proformacredito', [
                'logoBolivia' => $logoBolivia,
                'company_name' => $company_name,
                'date' => $date,
                'validity' => $validity,
                'pagoMensual' => number_format($pagoMensual, 2),
                'totalCredito' => number_format($totalCredito, 2),
                'precioContado' => $precioContado,
                'cuotaInicial' => $cuotaInicial,
                'meses' => $meses,
                'tipoCredito' => $tipoCredito,
            ]);
            $pdf->setPaper(setting('printer-page.printer'), setting('printer-page.oritentacion'));

            return $pdf->download('proforma' . time() . '.pdf');
        } else {
            return view('page.calculator', [

                'pagoMensual' => number_format($pagoMensual, 2),
                'totalCredito' => number_format($totalCredito, 2),
                'precioContado' => $precioContado,
                'cuotaInicial' => $cuotaInicial,
                'meses' => $meses,
                'tipoCredito' => $tipoCredito,
    
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
