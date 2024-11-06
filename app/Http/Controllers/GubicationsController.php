<?php

namespace App\Http\Controllers;

use App\Models\Gubications;
use Illuminate\Http\Request;

class GubicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function publicMap(Request $request)
    {
        // Obtener todas las ubicaciones
        $ubicaciones = Gubications::all();
        return view('page.contact', compact('ubicaciones')); // Actualiza la referencia a la vista
    }

    public function getClosestBranch(Request $request)
    {
        $lat = $request->query('lat');
        $lon = $request->query('lon');
        $city = $request->query('city');

        // Intentar encontrar ubicaciones en la ciudad
        $ubicaciones = Gubications::where('ciudad', $city)->get();

        // Si no se encuentran ubicaciones en la ciudad, buscar la más cercana
        if ($ubicaciones->isEmpty()) {
            $ubicaciones = Gubications::all();
            $closestBranches = [];
            $closestDistance = PHP_INT_MAX;

            foreach ($ubicaciones as $ubicacion) {
                $distance = $this->haversineGreatCircleDistance($lat, $lon, $ubicacion->latitude, $ubicacion->longitude);

                // Verificar si esta es la distancia más cercana encontrada
                if ($distance < $closestDistance) {
                    $closestDistance = $distance;
                    $closestBranches = [$ubicacion]; // Resetear lista con solo esta ubicación
                } elseif ($distance === $closestDistance) {
                    $closestBranches[] = $ubicacion; // Agregar a lista si es igual de cercana
                }
            }

            // Devolver solo las sucursales más cercanas
            return response()->json($closestBranches);
        }

        // Si hay ubicaciones en la ciudad, devolver esas ubicaciones
        return response()->json($ubicaciones);
    }

    private function haversineGreatCircleDistance($lat1, $lon1, $lat2, $lon2, $earthRadius = 6371)
    {
        // Conversión de grados a radianes
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        // Fórmula de Haversine
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c; // Distancia en kilómetros
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
    public function show(Gubications $gubications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gubications $gubications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gubications $gubications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gubications $gubications)
    {
        //
    }
}
