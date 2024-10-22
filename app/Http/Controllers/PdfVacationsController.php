<?php

namespace App\Http\Controllers;

use App\Models\Vacations;
use PDF;
use Illuminate\Http\Request;

class PdfVacationsController extends Controller
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

        $vacations = Vacations::with(['personas', 'user'])->findOrfail($id);


        // Obtener la URL del logo
        $logoUrl = setting('site.logo');

        // Generar el código QR
        //$qrCode = base64_encode(QrCode::size(100)->generate('wpBNPetuHPfaGg4sQL4XbWoxn0tCg3oZH1/ynlvqCC4X2GnCX1F9rK9CLjWFFz9sT6YvsLNHnsaGNU3uPLu2vFz1xag0gIGwhJjY8tf9PpmS6ajbj5jxxYdFovui/N0X0HI0am7oxfhiXSRNz9mKIlWhHu18FJxMquZl60+HNRHt+8r6DLsLNQjJ4q8jRJAMq15wV4VUEr4ubuAJN+AKyGK6aOD+MwEWggEtHD8jQ9PAJg7tYkhmEu2a/Gp0YctATrFjp5k7SsL1F3qUlE0CUenPZEmFszU7Q2XBzrx5pPQ5Vu9V8gwUPLGLELmm39BFxHokezLBH0D3ZNNvfFh4TQ==|6E2E3DC94E4114DAFC48F6E2'));
        
        // compras' => $compras,
        // 'personas' => $compras->personas,
        // 'productos' => $compras->productos,
        // 'totalEnLetras' => $totalEnLetras,
        // 'logoUrl' => $logoUrl,
        // 'qrCode' => $qrCode,
        // 'fechaCreacion' => $fechaCreacion,


        //datos para pasar a la vista
        $data = [
            'vacations' => $vacations,
            'logoUrl' => $logoUrl
        ];

        $pdf = PDF::loadView('pdf.vacaciones', $data)            
            ->setPaper('letter');

        return $pdf->stream('FRM_02_' . $vacations->number . '.pdf');
        //return $pdf->download('FRM_02_' . $vacations->number . '.pdf');
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
