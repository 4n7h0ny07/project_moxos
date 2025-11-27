<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Personas;  // Suponiendo que tienes un modelo de Persona
use App\Models\Coordenadas;  // El modelo que guarda las coordenadas
use App\Models\Promotores;
use App\Models\Cobradores;

use Auth;

class CoordenadasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las personas que NO están en la tabla coordenadas
        $personas = Personas::whereNotIn('id', Coordenadas::select('personas_id'))->get();

        // Obtener todos los promotores y cobradores
        $promotores = Promotores::all();

        $cobradores = Cobradores::all();
        // Asegúrate de que el modelo Cobradores exista y esté configurado correctamente

        return view('vendor.voyager.coordenadas.index', compact('personas', 'cobradores', 'promotores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(Request $request)
    {
        // 🔹 Recibir cobrador_id (si existe), viene en base64
        $cobradorId = $request->has('cobrador_id')
            ? base64_decode($request->input('cobrador_id'))
            : null;
    
        // 🔹 Obtener coordenadas (todas o filtradas)
        $coordenadasQuery = Coordenadas::with('persona', 'cobrador', 'promotor');
    
        if (!empty($cobradorId)) {
            $coordenadasQuery->where('cobrador_id', $cobradorId);
        }
    
        $coordenadas = $coordenadasQuery->get();
    
        // 🔹 Listas para selects
        $cobradores  = Cobradores::with('grupos')->get();
        $promotores  = Promotores::get();
        $personas    = Personas::whereNotIn('id', Coordenadas::select('personas_id'))->get();
    
        return view('vendor.voyager.coordenadas.show', compact(
            'personas',
            'cobradores',
            'promotores',
            'coordenadas',
            'cobradorId'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        {
            // // Validación de los datos del formulario
            // $request->validate([
            //     'persona_id' => 'required|exists:personas,id',
            //  //   'latitud' => 'required',
            //  //   'longitud' => 'required',
            // ]);
            //dd($request);
            // Guardar la nueva coordenada


            Coordenadas::create([
                'personas_id' => $request->persona_id,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'detail_refernce' => $request->detail,
                'user_id' => Auth::id(),
                'cobrador_id' => $request->cobrador_id ?: Auth::id(), // Si cobrador_id es null o vacío, asigna el ID del usuario logueado
                'promotor_id' => $request->promotor_id,
            ]);



            return redirect()->route('coodenadas.index')->with('success', 'Coordenadas guardadas con éxito');
        }
    }
}
