<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('productos')->delete();
        
        \DB::table('productos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'fx-123546',
                'images' => '["productos\\\\October2024\\\\oyWK70QrAzmCepAMRfa8.png"]',
                'type_id' => 1,
                'name_product' => 'Fox',
                'sku_product' => NULL,
                'cc_product' => NULL,
                'serial_product' => NULL,
                'model_product' => 'Fox-2024',
                'details_product' => '<p>bla</p>',
                'color' => '#ff0000',
                'observaciones' => '<p>bla, bla, bla</p>',
                'user_id' => 1,
                'created_at' => '2024-10-03 21:13:17',
                'updated_at' => '2024-10-03 21:13:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'MTO-TRK',
                'images' => '["productos\\\\October2024\\\\KVDy0M2wcP15MpzaOEKy.png"]',
                'type_id' => 2,
                'name_product' => 'TRK',
                'sku_product' => NULL,
                'cc_product' => NULL,
                'serial_product' => NULL,
                'model_product' => 'trk',
                'details_product' => '<p>La <strong>Benelli TRK</strong> es una motocicleta de aventura vers&aacute;til y robusta, dise&ntilde;ada para ofrecer comodidad y estabilidad tanto en carreteras pavimentadas como en terrenos off-road. Con un motor potente y un chasis resistente, la TRK combina estilo, tecnolog&iacute;a avanzada y rendimiento, ideal para viajes largos y exploraciones en cualquier tipo de terreno.</p>',
                'color' => '#ffffff',
                'observaciones' => '<p>La <strong>Benelli TRK</strong> es una motocicleta dise&ntilde;ada especialmente para el segmento de turismo de aventura. Con un dise&ntilde;o robusto y moderno, destaca tanto por su apariencia agresiva como por su funcionalidad. Su motor de cilindrada media proporciona una potencia adecuada para largas distancias y aventuras off-road, manteniendo un consumo eficiente de combustible. La TRK cuenta con un sistema de suspensi&oacute;n optimizado, que permite una conducci&oacute;n suave en terrenos irregulares, y su estructura ergon&oacute;mica est&aacute; pensada para la comodidad del piloto en trayectos prolongados.</p>
<p>La moto incluye una pantalla alta para la protecci&oacute;n contra el viento y un sistema de iluminaci&oacute;n LED que mejora la visibilidad en condiciones de poca luz. Sus frenos de disco en ambas ruedas, junto con el sistema ABS, brindan un control y seguridad adicionales, especialmente en superficies dif&iacute;ciles. Adem&aacute;s, la TRK suele equiparse con maleteros y portaequipajes, lo que la convierte en una excelente opci&oacute;n para viajeros que necesitan espacio de almacenamiento adicional.</p>
<p>En resumen, la <strong>Benelli TRK</strong> es una elecci&oacute;n excepcional para los motociclistas que buscan una m&aacute;quina confiable, vers&aacute;til y preparada para cualquier aventura, tanto en la carretera como fuera de ella.</p>',
                'user_id' => 1,
                'created_at' => '2024-10-03 21:21:09',
                'updated_at' => '2024-10-04 19:28:27',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'MTO-Style',
                'images' => '["productos\\\\October2024\\\\WSZBD6CxuLjSZYSEjfWp.png"]',
                'type_id' => 1,
                'name_product' => 'Style 110',
                'sku_product' => NULL,
                'cc_product' => NULL,
                'serial_product' => NULL,
                'model_product' => NULL,
                'details_product' => '<p>bla, bla, bla</p>',
                'color' => '#ff8080',
                'observaciones' => '<p>bla, bla, bla, bla, bla, bla</p>',
                'user_id' => 1,
                'created_at' => '2024-10-03 22:30:33',
                'updated_at' => '2024-10-03 22:30:33',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'MTO-g-110',
                'images' => '["productos\\\\October2024\\\\DH0DRfCsXvFvgQf7PWVl.png"]',
                'type_id' => 1,
                'name_product' => 'GLEE 110',
                'sku_product' => NULL,
                'cc_product' => '107cc',
                'serial_product' => NULL,
                'model_product' => '2024',
                'details_product' => NULL,
                'color' => '#000000',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 22:53:45',
                'updated_at' => '2024-10-03 22:53:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'MTO-STSR110',
                'images' => '["productos\\\\October2024\\\\qLUREXQHXTmok3aiK3BA.png"]',
                'type_id' => 1,
                'name_product' => 'STYLE SR 110',
                'sku_product' => NULL,
                'cc_product' => NULL,
                'serial_product' => NULL,
                'model_product' => NULL,
                'details_product' => NULL,
                'color' => '#808080',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 23:09:56',
                'updated_at' => '2024-10-03 23:09:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'mto-ln-200',
                'images' => '["productos\\\\October2024\\\\0lDbeGx4pwi06aPJ4ScP.png"]',
                'type_id' => 3,
                'name_product' => 'Lyon',
                'sku_product' => NULL,
                'cc_product' => '200',
                'serial_product' => NULL,
                'model_product' => 'lyon 200/2024',
                'details_product' => '<p>blb</p>',
                'color' => '#000000',
                'observaciones' => '<p>bla</p>',
                'user_id' => 1,
                'created_at' => '2024-10-04 15:16:23',
                'updated_at' => '2024-10-04 15:16:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}