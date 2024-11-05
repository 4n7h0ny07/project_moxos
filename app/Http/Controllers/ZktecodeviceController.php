<?php

namespace App\Http\Controllers;

use App\Models\Zktecodevice;
use Illuminate\Http\Request;
use Carbon\Carbon; // Importar Carbon para el manejo de fechas
use MehediJaman\LaravelZkteco\LaravelZkteco;

class ZktecodeviceController extends Controller

{
    public function toggleConnection($id)
    {
        $device = Zktecodevice::findOrFail($id);

        try {
            $zk = new LaravelZkteco($device->ip_address, $device->port_device);
            // $zk->serialNumber(); 
            // $zk->deviceName(); 

            if (!$device->is_connected) {
                // Intentar conectar si no está conectado
                if ($zk->connect()) {
                    // Conexión exitosa
                    //$zk->connect();
                    //dd($zk);
                    $device->is_connected = true;

                    // Aquí podrías mantener la conexión abierta si deseas
                } else {
                    return redirect()->back()->with('err', 'No se pudo conectar al dispositivo.');
                }
            } else {
                if ($zk->connect()) {
                    // Si ya está conectado, desconéctalo
                    $zk->disconnect();
                    //dd($zk);
                    $device->is_connected = false;
                } else {
                    return redirect()->back()->with('err', 'No se pudo conectar al dispositivo.');
                }
            }

            $device->save();
            return redirect()->back()->with('message', 'Conexion exitosa');
        } catch (\Exception $e) {
            return redirect()->back()->with('err', 'Error al cambiar el estado de conexión: ' . $e->getMessage());
        }
    }



    public function show($id)
    {
        // Encuentra el dispositivo específico
        $device = Zktecodevice::findOrFail($id);

        // Verificar si el dispositivo está conectado
        if (!$device->is_connected) {
            return back()->with('message', 'El dispositivo no está conectado.');
        }

        // Conectar con el dispositivo
        $zk = new LaravelZkteco($device->ip_address, $device->port_device);

        $connectionSuccessful = false;

        try {
            if ($zk->connect()) {
                $connectionSuccessful = true;

                // Obtén los registros de asistencia
                $records = $zk->getAttendance();
                $serial = $zk->serialNumber();
                $name = $zk->deviceName();

                $zk->disconnect(); // Desconectar después de obtener los datos
            } else {
                return back()->with('err', 'No se pudo conectar al dispositivo.');
            }
        } catch (\Exception $e) {
            // Captura errores de conexión
            return back()->with('err', 'Error de conexión con el dispositivo: ' . $e->getMessage());
        }

        if (!$connectionSuccessful || empty($records)) {
            return back()->with('err', 'No se pudo conectar al dispositivo o no se encontraron registros.');
        }

        // Obtén el mes actual
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Horarios de referencia
        $schedule = [
            'lunes' => [
                ['entrada' => '08:30', 'salida' => '12:30'],
            ],
            'martes' => [
                ['entrada' => '08:30', 'salida' => '12:30'],
            ],
            'miércoles' => [
                ['entrada' => '08:30', 'salida' => '12:30'],
            ],
            'jueves' => [
                ['entrada' => '08:30', 'salida' => '12:30'],
            ],
            'viernes' => [
                ['entrada' => '08:30', 'salida' => '12:30'],
            ],
            'sábado' => [
                ['entrada' => '09:00', 'salida' => '13:00'],
            ],
        ];

        // Procesa los datos de asistencia obtenidos y calcula los retrasos
        $attendance = [];
        foreach ($records as $record) {
            $timestamp = Carbon::parse($record['timestamp']);

            // Filtrar solo registros del mes actual
            if ($timestamp->month === $currentMonth && $timestamp->year === $currentYear) {
                $dayOfWeek = strtolower($timestamp->locale('es')->dayName);

                // Verificar el horario según el día de la semana
                $daySchedule = $schedule[$dayOfWeek] ?? [];
                foreach ($daySchedule as $shift) {
                    $entryTime = Carbon::parse($shift['entrada']);
                    $exitTime = Carbon::parse($shift['salida']);

                    // Calcular el retraso solo para el horario de entrada
                    if ($timestamp->between($entryTime, $exitTime)) {
                        $lateMinutes = $timestamp->greaterThan($entryTime)
                            ? $timestamp->diffInMinutes($entryTime)
                            : 0;

                        $attendance[] = [
                            'uid' => $record['uid'],
                            'id' => $record['id'],
                            'state' => $record['state'],
                            'timestamp' => $timestamp->toDateTimeString(),
                            'type' => $record['type'],
                            'late_minutes' => $lateMinutes,
                        ];
                        break; // Salimos del bucle si ya encontramos un horario correspondiente
                    }
                }
            }
        }

        // Retorna la vista con los datos de asistencia y retraso
        return view('vendor.voyager.zktecodevices.show', compact('device', 'name', 'serial', 'attendance'));
    }
}
