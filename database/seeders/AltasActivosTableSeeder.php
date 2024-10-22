<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AltasActivosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('altas_activos')->delete();
        
        \DB::table('altas_activos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'personas_id' => 4,
                'nombre_activo' => 'Disco duro SSD',
                'numero_activo' => '000001',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '5760.00',
                'marca' => 'DELL',
                'modelo' => 'cp-ssd-500-dell',
                'serial' => '458542539848',
                'description' => '<p>Dsico duro SDD marca Dell, para el servidor central de 500 Gb de capasidad de almacenamiento</p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-06-18 23:14:36',
                'updated_at' => '2024-06-18 23:14:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'personas_id' => 2,
                'nombre_activo' => 'Lector de codigos de barra 1D',
                'numero_activo' => '000002',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '700.00',
                'marca' => 'ZKTeco',
                'modelo' => 'zk103',
                'serial' => '176751431591',
                'description' => '<p>Lector de codigos de barra 1D, color Gris oscuro con conexion inalambrico y alambrico, incluye cable USB y Antena USB Bluetooth</p>',
                'observacion' => NULL,
                'imagenes' => '["altas-activos\\\\July2024\\\\Dw8uOTFLLxxz3ucRgdxm.png"]',
                'user_id' => 1,
                'created_at' => '2024-07-15 22:15:00',
                'updated_at' => '2024-07-15 22:38:44',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'personas_id' => 17,
                'nombre_activo' => 'Impresora Epson L6270',
                'numero_activo' => '000003',
                'codigo_activo' => NULL,
                'vida_util' => '4',
                'costo' => '4980.00',
                'marca' => 'Epson',
                'modelo' => 'L6270',
                'serial' => 'X8G7030758',
                'description' => '<p>Impresora Epson L6270, multifuncion escanea, fotocopia e imprime, color negro, tintas BK C M Y numero 644, con conexion USB, y RJ45 mas cable USB color blanco y cable de poder color negro, hoja de alimentacion tama&ntilde;o CARTA/A4</p>
<p><img src="http://project_moxos.be/storage/altas-activos/July2024/L6270-690x460-1.jpg" alt="" width="212" height="141"></p>',
                'observacion' => NULL,
                'imagenes' => '["altas-activos\\\\July2024\\\\DLJXGKVZX8FF2bweI8ha.jpg"]',
                'user_id' => 1,
                'created_at' => '2024-07-19 20:52:36',
                'updated_at' => '2024-07-19 20:52:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'personas_id' => 20,
                'nombre_activo' => 'MOTOR DE LUZ',
                'numero_activo' => '000004',
                'codigo_activo' => NULL,
                'vida_util' => '48',
                'costo' => '2100.00',
                'marca' => 'TOTAL',
                'modelo' => 'TP130005',
                'serial' => NULL,
                'description' => '<p>&nbsp;</p>
<p>MOTOR DE LUZ DE 3000 WATTS MARCA TOTAL 7 HP 6 MESES DE GARANT&Iacute;A POR DEFECTO DE FABRICA COLOR VERDE CON PLOMO RESP. HUGO RODR&Iacute;GUEZ VACA</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="http://project_moxos.be/storage/altas-activos/July2024/Imagen de WhatsApp 2024-07-26 a las 10.23.48_3bc47cf0 motor1.jpg" alt="" width="272" height="153"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'observacion' => 'MOTOR DE LUZ DE 3000 WATTS MARCA TOTAL 7 HP 6 MESES DE GARANTÍA POR DEFECTO DE FABRICA COLOR VERDE CON PLOMO RESP. HUGO RODRÍGUEZ VACA',
                'imagenes' => NULL,
                'user_id' => 3,
                'created_at' => '2024-07-26 15:37:00',
                'updated_at' => '2024-07-26 15:39:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'personas_id' => 21,
                'nombre_activo' => 'TALADRO',
                'numero_activo' => '000005',
                'codigo_activo' => NULL,
                'vida_util' => '48',
                'costo' => '620.00',
                'marca' => 'CROWN',
                'modelo' => 'CT21055L-1.514V',
                'serial' => NULL,
                'description' => '<p>&nbsp;</p>
<p>TALADRO CT 21055L-1.5 14V RECARGA P/BATERIA CROWN COLOR PLOMO RESP.MORGAN CUELLAR ARAMAYO</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <img src="http://project_moxos.be/storage/altas-activos/July2024/Imagen de WhatsApp 2024-07-24 a las 16.50.36_feab429a taladro1.jpg" alt="" width="220" height="124"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 3,
                'created_at' => '2024-07-26 22:16:00',
                'updated_at' => '2024-07-26 22:17:10',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'personas_id' => 21,
                'nombre_activo' => 'BOMBA P/ACEITE C/PALANCA',
                'numero_activo' => '000006',
                'codigo_activo' => NULL,
                'vida_util' => '48',
                'costo' => '235.00',
                'marca' => 'TRUPER',
                'modelo' => NULL,
                'serial' => NULL,
                'description' => '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>BOMBA PARA ACEITE CON PALANCA INYECTORES COLOR NARANJA MARCA TRUPER RESP. MORGAN CUELLAR ARAMAYO</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="http://project_moxos.be/storage/altas-activos/July2024/Imagen de WhatsApp 2024-07-24 a las 16.35.44_43a18893 bomba aceite1.jpg" alt="" width="274" height="154"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 3,
                'created_at' => '2024-07-26 22:40:50',
                'updated_at' => '2024-07-26 22:40:50',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'personas_id' => 34,
                'nombre_activo' => 'ROUTER VPN R600',
                'numero_activo' => '000007',
                'codigo_activo' => NULL,
                'vida_util' => '4',
                'costo' => '970.00',
                'marca' => 'TP-LINK',
                'modelo' => 'TL-R600VPN',
                'serial' => '214B405000513',
                'description' => '<p>Solicito la consideracion de alta de un activo para al sucursal de Guayaramerin de la Empresa Moxos Import Export, Router VPN color&nbsp; gris ocuro que se utilisara para la conexion VPN segura para uso del sistema TR4.</p>
<p>&nbsp;</p>
<p><img title="TL-R600VPN" src="http://project_moxos.be/storage/altas-activos/August2024/TL-R600VPN_UN_4.0_02_1499778417768v.jpg" alt="" width="173" height="130"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-08-20 20:58:09',
                'updated_at' => '2024-08-20 20:58:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'personas_id' => 33,
                'nombre_activo' => 'ROUTER R600 vpn',
                'numero_activo' => '000008',
                'codigo_activo' => NULL,
                'vida_util' => '4',
                'costo' => '970.00',
                'marca' => 'TP-LINK',
                'modelo' => 'TL-R600VPN',
                'serial' => '214B405000511',
                'description' => '<p>Solicito la consideracion de alta de un activo para al sucursal de Santa Rosa del Yacuma de la Empresa Moxos Import Export, Router VPN color&nbsp; gris ocuro que se utilisara para la conexion VPN segura para uso del sistema TR4.</p>
<p><img title="TPLR600VPN" src="http://project_moxos.be/storage/altas-activos/August2024/TL-R600VPN_UN_4.0_02_1499778417768v1.jpg" alt="" width="200" height="150"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-08-20 21:01:24',
                'updated_at' => '2024-08-20 21:01:24',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'personas_id' => 2,
                'nombre_activo' => 'SWITCH DE 16 PUERTOS',
                'numero_activo' => '000009',
                'codigo_activo' => NULL,
                'vida_util' => '4',
                'costo' => '980.00',
                'marca' => 'TP-LINK',
                'modelo' => 'TL-SG1016',
                'serial' => '223B0K2001293',
                'description' => '<p>Solicito la consideracion de alta de un activo para tienda central de la Empresa Moxos Import Export en al ciudad de la Santisima Trinidad, Switch Gigabit de 16 puertos 10/100/1000 Mbps color gris ocuro que se utilisara para la conexion de computadores de uso del area comercial y camaras.</p>
<p><img title="TL-SG1016" src="http://project_moxos.be/storage/altas-activos/August2024/TL-SG1016.jpg" alt="" width="200" height="150"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-08-20 21:14:42',
                'updated_at' => '2024-08-20 21:14:42',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'personas_id' => 41,
                'nombre_activo' => 'XVR grabador de Video vigilancia',
                'numero_activo' => '000010',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '1380.00',
                'marca' => 'DAHUA',
                'modelo' => 'DH-XVR5108HS',
                'serial' => 'AB03AABPAZ5C7CE',
                'description' => '<p>GRABADOR DE 8 CANALES, 5MN/1080P, WIZSENSE, 1 HDD, HASTA 16TB, 1 RS485, 2 USB,1HDMI, 1 DGA, GRABACION REAL COLOR NEGRO</p>
<p>&nbsp;</p>
<p><img src="http://project_moxos.be/storage/altas-activos/August2024/DH-XVR5108HS.png" alt="" width="200" height="200"> <img src="http://project_moxos.be/storage/altas-activos/August2024/DH-XVR5108HS_1.png" alt="" width="200" height="200"></p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-08-30 18:59:17',
                'updated_at' => '2024-08-30 18:59:17',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'personas_id' => 3,
                'nombre_activo' => 'Didco HDD',
                'numero_activo' => '000011',
                'codigo_activo' => NULL,
                'vida_util' => '4',
                'costo' => '2697.00',
                'marca' => 'Wester Digital',
                'modelo' => 'purpura para cctv',
                'serial' => 'sn',
                'description' => '<p>Disco duro para CCTV de 6 Tb de capasidad,&nbsp; de la marca wester Digital, color purpura</p>',
                'observacion' => 'Este disco es para el DVR principal de la empresa de 32 canales',
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-09-27 15:38:01',
                'updated_at' => '2024-09-27 15:38:01',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'personas_id' => 3,
                'nombre_activo' => 'RAM 32 Gb',
                'numero_activo' => '000012',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '4680.00',
                'marca' => 'Dell',
                'modelo' => 'Memoria de solo lectura',
                'serial' => '99384/v 88395QQ',
            'description' => '<p>Memoria ram de 32 Gb (x2), para adicionar al servidor central con numero de activo (04-001-0003)</p>',
                'observacion' => 'Memorias para adicionar al servidor central',
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-09-27 15:48:00',
                'updated_at' => '2024-09-27 15:48:59',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'personas_id' => 55,
                'nombre_activo' => 'SWITCH',
                'numero_activo' => '000013',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '1450.00',
                'marca' => 'TP-LINK',
                'modelo' => 'TL-SG1024',
                'serial' => '223B5A9004268',
                'description' => '<p>Switch de 24 puertos color gris oscuro rackeable, de la maraca tp-link, para el area de tienda central segunda planta</p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-09-30 13:57:00',
                'updated_at' => '2024-09-30 14:04:58',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'personas_id' => 56,
                'nombre_activo' => 'SWITCH POE 8 PUERTOS',
                'numero_activo' => '000014',
                'codigo_activo' => NULL,
                'vida_util' => '5',
                'costo' => '1915.00',
                'marca' => 'DAHUA',
                'modelo' => 'DH-PFS3010-8ET-65',
                'serial' => 'AC05E99PAJAF1C0',
                'description' => '<p>Switch de 8 puertos poe de color gris oscuro, de la marca Dahua para el area de tienda central planta baja de la Empresa Moxos Imnport Export</p>',
                'observacion' => NULL,
                'imagenes' => NULL,
                'user_id' => 1,
                'created_at' => '2024-09-30 14:04:43',
                'updated_at' => '2024-09-30 14:04:43',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'personas_id' => 67,
                'nombre_activo' => 'HELADERA',
                'numero_activo' => '000015',
                'codigo_activo' => NULL,
                'vida_util' => NULL,
                'costo' => NULL,
                'marca' => 'CONSUL',
                'modelo' => 'CRD37P1',
                'serial' => 'JD1521918',
                'description' => '<p>HELADERA DE 2 PUERTAS C/BLANCO DE USO DEL SERVICE</p>
<p><img src="http://project_moxos.be/storage/altas-activos/October2024/WhatsApp Image 2024-10-04 at 10.20.55 AM (2)2.jpeg" alt="" width="114" height="203"></p>',
                'observacion' => 'HELADERA DE 2 PUERTAS C/BLANCO DE USO DEL SERVICE',
                'imagenes' => '["altas-activos\\\\October2024\\\\w3DJWo8ynNjxgmRzg5sO.jpeg"]',
                'user_id' => 12,
                'created_at' => '2024-10-10 23:10:00',
                'updated_at' => '2024-10-10 23:17:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}