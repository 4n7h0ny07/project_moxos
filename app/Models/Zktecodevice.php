<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Mehedi\ZKTeco\Lib\ZKTeco;
use MehediJaman\LaravelZkteco\LaravelZkteco;

class Zktecodevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_device',
        'ip_address',
        'ip_subnet',
        'ip_gateway',
        'port_device',
        'user_name',
        'user_password',
    ];

    // public function getAttendance()
    // {
    //     // Configura la conexión con los datos del dispositivo
    //     $zk = new LaravelZkteco($this->ip_address, $this->port_device);

    //     //dd($zk->getAttendance());
    //     if ($zk->connect()) {
    //         // Obtén los registros de asistencia y luego desconecta
    //         $attendance = $zk->getAttendance();
    //         //dd($attendance);
    //         $zk->disconnect();

    //         return $attendance;
    //     } else {
    //         return null; // Error de conexión
    //     }
    // }
}
