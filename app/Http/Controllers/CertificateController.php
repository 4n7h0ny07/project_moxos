<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use PDF;
use App\Models\Personas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CertificateController extends Controller
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

        // Verificar si el usuario tiene el permiso
        if (!auth()->user()->hasPermission('certificate_pdf')) {
            abort(403); // Acceso denegado
        }

        // Asegúrate de establecer el locale en español
        setlocale(LC_TIME, 'es_ES.UTF-8');
        \Carbon\Carbon::setLocale('es');

        $fechaActual = Carbon::now();

        $persona = Personas::with('user')->findOrFail($id);

        // Acceder al nombre del grupo directamente
        $grupo = $persona->grupos ? $persona->grupos->name : 'no hay id';

        switch ($grupo) {
            case 'Clientes Guayaramerin':
                $representeante = ' La empresa Comercial <b> Moxos Import Export </b> con registro de Comercio de Bolivia SEPREC No. - 1680986019. Representada legalmente  por su responsable Regional, Sra. Aida Ojopi Melgar.';
                $ciudad = 'Gayaramerin, ' . $fechaActual->translatedFormat('d \\de F \\de Y');
                break;
            case 'Clientes Riberalta':
                $representeante = ' La empresa Comercial <b> Moxos Import Export </b> con registro de Comercio de Bolivia SEPREC No. - 1680986019. Representada legalmente  por su responsable Regional Lic. Max Sebatian Gamara Castedo.';
                $ciudad = 'Riberalta, '.$fechaActual->translatedFormat('d \\de F \\de Y');
                break;
            case 'Clientes Santa Ana':
                $representeante = ' La empresa Comercial <b> Moxos Import Export </b> con registro de Comercio de Bolivia SEPREC No. - 1680986019. Representada legalmente por su responsable Regional, Sra. Sarah Portales Sosa.';
                $ciudad = 'Santa Ana del Yacuma, ' . $fechaActual->translatedFormat('d \\de F \\de Y');
                break;
            case 'Clientes Santa Cruz':
                $representeante = ' La empresa Comercial <b> Moxos Import Export </b> con registro de Comercio de Bolivia SEPREC No. - 1680986019. Representada legalmente por su responsable Regional, Ing. Ana Esther Aranda Arteaga.';
                $ciudad = 'Santa Cruz de la Sierra, '. $fechaActual->translatedFormat('d \\de F \\de Y');
                break;
            default:
                $representeante = ' La Gerencia y/o Jefactura de Gestión de Cartea y control de Crédito de la empresa Comercial <b> Moxos Import Export </b> con registro de Comercio de Bolivia SEPREC No. - 1680986019.';
                $ciudad = 'La Santisima Trinidad, ' . $fechaActual->translatedFormat('d \\de F \\de Y');
        }


        // Obtener la URL del logo
        $logoUrl = setting('printer-page.membrete_no_adeuda');


        //datos para pasar a la vista
        $data = [
            'representante' => $representeante,
            'ciudad' => $ciudad,
            'persona' => $persona,
            'logoUrl' => $logoUrl
        ];

        $pdf = PDF::loadView('pdf.certificate', $data)
            ->setPaper('letter');

        return $pdf->download('certtificado_'.$persona->names.'_' . time() . '.pdf');
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
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
