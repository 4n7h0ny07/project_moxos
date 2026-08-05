<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;

class PdfBajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function generatePdf($id)
    {
        $bajas = Activo::with(['personas', 'user'])->findOrFail($id);

        // Cálculo depreciación
        $fechaCompra = Carbon::parse($bajas->date_compra);

        $valorInicial = $bajas->coste;
        $vidaUtil = $bajas->vidautil; // años

        $mesesTranscurridos = $fechaCompra->diffInMonths(now());

        $depreciacionMensual = $valorInicial / ($vidaUtil * 12);

        $depreciacionAcumulada = $depreciacionMensual * $mesesTranscurridos;

        // Evitar depreciar más allá del valor del activo
        if ($depreciacionAcumulada > $valorInicial) {
            $depreciacionAcumulada = $valorInicial;
        }

        $valorActual = $valorInicial - $depreciacionAcumulada;

        $textoLimpio = html_entity_decode(strip_tags($bajas->description));
        $textoLimpio = strtoupper($textoLimpio);

        if (empty($textoLimpio)) {
            $textoLimpio = 'https://serna.moxos.com.bo/admin/login';
        }

        $qrCode = base64_encode(
            QrCode::size(200)->generate($textoLimpio)
        );

        $logoUrl = setting('site.logo');

        $data = [
            'bajas' => $bajas,
            'logoUrl' => $logoUrl,
            'QrCode' => $qrCode,

            // Nuevos datos
            'valorInicial' => $valorInicial,
            'vidaUtil' => $vidaUtil,
            'mesesTranscurridos' => $mesesTranscurridos,
            'depreciacionMensual' => $depreciacionMensual,
            'depreciacionAcumulada' => $depreciacionAcumulada,
            'valorActual' => $valorActual,
        ];

        $pdf = PDF::loadView('pdf.bajas', $data)
            ->setPaper('letter');

        return $pdf->stream('frm_05' . $bajas->code . '.pdf');
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
