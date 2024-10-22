<?php

namespace App\Http\Controllers;

use App\Models\AltasActivos;
use PDF;
use Illuminate\Http\Request;

class PdfAltasController extends Controller
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

        $altas = AltasActivos::with(['personas', 'user'])->findOrfail($id);


        // Obtener la URL del logo
        $logoUrl = setting('site.logo');


        //datos para pasar a la vista
        $data = [
            'altas' => $altas,
            'logoUrl' => $logoUrl
        ];

        $pdf = PDF::loadView('pdf.altas', $data)
            ->setPaper('letter');

        return $pdf->download('frm_04' . $altas->numero_activo . '.pdf');
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
