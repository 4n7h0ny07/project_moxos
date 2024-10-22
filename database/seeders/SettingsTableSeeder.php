<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Moxos Import Export',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Satisfaccion Garantisada',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\June2024\\qZh9yNUTM5eXcbHoxGfs.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'MOXOS IMPORT EXPORT',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Satisfaccion Garantizada',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\\July2024\\z2QV6CYRWD0S35F52ZfB.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'site.tpo_cambio',
                'display_name' => 'Tipo de Cambio del Dollar',
                'value' => '8.40',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'site.tipo_cambio_oficial',
                'display_name' => 'tipo de cambio oficial',
                'value' => '6.96',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'site.image_logo',
                'display_name' => 'Imagen Logo',
                'value' => 'settings\\July2024\\p1XOXPGfO1wkYluZA6Nv.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'configuracion.razon_social',
                'display_name' => 'Razon Social',
                'value' => 'MOXOS IMPORT EXPORT',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Configuracion',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'configuracion.address',
                'display_name' => 'address',
                'value' => 'AV. 6 DEAGOSTO ESQ. 18 DE NOVIEMBRE',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Configuracion',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'configuracion.img_bolivia',
                'display_name' => 'Imamagen escudo de Bolivia',
                'value' => 'settings\\August2024\\OiTd4HHCzGK4MXM68Ftx.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 11,
                'group' => 'Configuracion',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'configuracion.img_trabajo',
                'display_name' => 'Imagen logo Ministerio de Trabajo',
                'value' => 'settings\\August2024\\Ewg4rTFTiWWRiTILqNJG.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 12,
                'group' => 'Configuracion',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'mail-configuration.mailserver',
                'display_name' => 'Server Mail',
                'value' => 'mail.moxos.com.bo',
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Mail Configuration',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'mail-configuration.portserver',
                'display_name' => 'Port Server Mail',
                'value' => '993',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Mail Configuration',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'mail-configuration.securesettings',
                'display_name' => 'Secure SSL/TLS Settings',
                'value' => '1',
                'details' => '{
"on": "SSL/TLS",
"off": "",
"checked": false
}',
                'type' => 'checkbox',
                'order' => 15,
                'group' => 'Mail Configuration',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'mail-configuration.smtpserver',
                'display_name' => 'Incoming Server Port',
                'value' => '465',
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Mail Configuration',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'calculadora.motos_benelli',
                'display_name' => 'Benelli',
                'value' => '2.8',
                'details' => NULL,
                'type' => 'text',
                'order' => 20,
                'group' => 'Calculadora',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'calculadora.motos_serna',
                'display_name' => 'Serna',
                'value' => '3.5',
                'details' => NULL,
                'type' => 'text',
                'order' => 17,
                'group' => 'Calculadora',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'calculadora.bicicletas_bike',
                'display_name' => 'Bicicletas',
                'value' => '3',
                'details' => NULL,
                'type' => 'text',
                'order' => 18,
                'group' => 'Calculadora',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'calculadora.electrodomesticos',
                'display_name' => 'Electrodomesticos',
                'value' => '3.5',
                'details' => NULL,
                'type' => 'text',
                'order' => 21,
                'group' => 'Calculadora',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'calculadora.motos_media_benelli',
                'display_name' => 'Gama Media Benelli',
                'value' => '3',
                'details' => NULL,
                'type' => 'text',
                'order' => 19,
                'group' => 'Calculadora',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'calculadora.logo_image',
                'display_name' => 'Logo Calculadora',
                'value' => 'settings\\September2024\\aHjxi0krlwmt6j06sSSa.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 22,
                'group' => 'Calculadora',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'calculadora.otros_costos',
                'display_name' => 'Costo de mantenimiento y otros',
                'value' => '60',
                'details' => NULL,
                'type' => 'text',
                'order' => 23,
                'group' => 'Calculadora',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'printer-page.printer',
                'display_name' => 'Tamaño de impresion',
                'value' => 'letter',
                'details' => '{
"default" : "Carta",
"options" : {
"A4":"A4",
"letter":"Carta",
"half-letter": "Media Carta",
"oficio": "Oficio",
"half-office":"Media Oficio"
}
}',
                'type' => 'select_dropdown',
                'order' => 24,
                'group' => 'printer_page',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'printer-page.oritentacion',
                'display_name' => 'Orientacion',
                'value' => '\'Portrait\'',
                'details' => '{
"default" : "Vertical",
"options" : {
"\'Portrait\'": "Vertical",
"\'Landscape\'": "Horizontal"
}
}',
                'type' => 'select_dropdown',
                'order' => 25,
                'group' => 'printer_page',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'printer-page.pdf',
                'display_name' => 'Printer Pdf',
                'value' => '1',
                'details' => '{
"default" : "No imprimir Pdf",
"options" : {
"true": "Imprimir Pdf",
"false": "No imprimir Pdf"
}
}',
                'type' => 'checkbox',
                'order' => 26,
                'group' => 'printer_page',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'printer-page.membrete_no_adeuda',
                'display_name' => 'Membrete Certificado no Adeudo',
                'value' => 'settings\\October2024\\oYyqQa9lMhLuqv8Xa8uZ.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 27,
                'group' => 'printer_page',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'site.site_portada',
                'display_name' => 'Portada Site',
                'value' => 'settings\\October2024\\axpu7fBdm7IVmp2XIxew.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 28,
                'group' => 'Site',
            ),
            33 => 
            array (
                'id' => 35,
                'key' => 'site.privacity',
                'display_name' => 'polices',
                'value' => '### Política de Privacidad

**Fecha de última actualización: [01-10-2024]**

En **Moxos Import Export** valoramos y respetamos la privacidad de nuestros clientes y usuarios. Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la información personal que usted nos proporciona al utilizar nuestros servicios y sitio web.

#### 1. **Información que Recopilamos**

Podemos recopilar la siguiente información personal:

- **Datos de identificación**: nombre completo, dirección, número de teléfono, correo electrónico, número de identificación fiscal (si es aplicable).
- **Información de pago**: número de tarjeta de crédito o débito, datos bancarios, y cualquier otra información necesaria para procesar pagos.
- **Datos de uso del sitio web**: cookies, dirección IP, tipo de navegador, y páginas visitadas en nuestro sitio.
- **Información relacionada con productos y servicios**: historial de compras, preferencias de productos, consultas o quejas.

#### 2. **Uso de la Información**

Utilizamos la información recopilada para los siguientes fines:

- **Procesamiento de pedidos**: utilizar su información personal para gestionar y completar su compra, incluyendo la entrega y el seguimiento de los productos.
- **Mejora del servicio al cliente**: utilizar la información proporcionada para responder a consultas, procesar reclamos o brindar soporte relacionado con nuestros productos o servicios.
- **Comunicaciones**: enviarle notificaciones sobre el estado de sus pedidos, promociones, ofertas especiales y otra información relevante sobre nuestros productos y servicios.
- **Seguridad y prevención del fraude**: proteger nuestros derechos y prevenir actividades fraudulentas o ilegales.
- **Cumplimiento legal**: para cumplir con la normativa legal o las solicitudes de las autoridades competentes.

#### 3. **Protección de la Información**

En **Moxos Import Export**, implementamos medidas de seguridad físicas, electrónicas y administrativas para proteger su información personal contra acceso no autorizado, alteraciones, divulgación o destrucción.

Algunas de las medidas que tomamos incluyen:

- Cifrado de datos sensibles (como información de tarjetas de crédito).
- Restricción del acceso a la información personal solo a empleados y proveedores de servicios que necesiten dicha información para llevar a cabo sus funciones.
- Monitoreo continuo de nuestros sistemas para detectar posibles vulnerabilidades y ataques.

#### 4. **Compartir Información con Terceros**

No compartimos, vendemos ni alquilamos su información personal a terceros, excepto en las siguientes situaciones:

- **Proveedores de servicios**: compartimos su información con proveedores externos que nos ayudan a operar nuestro negocio, como servicios de envío, procesamiento de pagos o marketing. Estos terceros están obligados a mantener la confidencialidad de su información.
- **Cumplimiento legal**: podemos divulgar su información personal si es requerido por ley o si creemos de buena fe que dicha divulgación es necesaria para proteger nuestros derechos, cumplir con procesos judiciales, o responder a solicitudes gubernamentales.
- **Fusiones o adquisiciones**: en caso de que nuestra empresa sea adquirida, fusionada o vendida, la información personal de los clientes podría ser transferida como parte del proceso.

#### 5. **Uso de Cookies**

Nuestro sitio web utiliza cookies para mejorar la experiencia del usuario, analizar el tráfico y personalizar el contenido que le ofrecemos. Una cookie es un pequeño archivo de texto que se almacena en su dispositivo cuando visita nuestro sitio.

Puede optar por desactivar las cookies a través de la configuración de su navegador, pero esto podría afectar su capacidad para utilizar algunas funciones de nuestro sitio.

#### 6. **Sus Derechos**

Usted tiene los siguientes derechos con respecto a su información personal:

- **Acceso**: tiene derecho a solicitar una copia de la información personal que tenemos sobre usted.
- **Corrección**: puede solicitar que corrijamos cualquier dato inexacto o incompleto.
- **Eliminación**: puede solicitar la eliminación de su información personal, salvo que exista una obligación legal de conservarla.
- **Oposición**: puede oponerse al tratamiento de su información personal para determinados fines, como marketing.
- **Retiro del consentimiento**: si ha dado su consentimiento para el procesamiento de su información personal, puede retirarlo en cualquier momento.

Para ejercer estos derechos, puede contactarnos a través de los detalles proporcionados en la sección de contacto.

#### 7. **Período de Conservación**

Conservamos su información personal solo durante el tiempo necesario para cumplir con los fines para los que fue recopilada, incluidos los requisitos legales o contractuales aplicables. Una vez que la información ya no sea necesaria, la eliminaremos de manera segura.

#### 8. **Enlaces a Sitios Web de Terceros**

Nuestro sitio web puede contener enlaces a sitios web de terceros. No somos responsables de las prácticas de privacidad o del contenido de dichos sitios web. Le recomendamos que lea las políticas de privacidad de los sitios web de terceros antes de proporcionarles cualquier información personal.

#### 9. **Cambios en la Política de Privacidad**

Podemos actualizar esta Política de Privacidad de vez en cuando. Le notificaremos sobre cualquier cambio mediante la publicación de la nueva política en nuestro sitio web, con una fecha de "Última actualización". Le recomendamos que revise esta página periódicamente para mantenerse informado sobre nuestras prácticas de privacidad.

#### 10. **Contacto**

Si tiene alguna pregunta o inquietud sobre esta Política de Privacidad o sobre el tratamiento de su información personal, puede contactarnos a través de los siguientes medios:

- **Correo electrónico**: info@moxos.com.bo
- **Teléfono**: +591 346 246 00
- **Dirección**: Casa matriz, Av. 6 de Agosto, esq. 18 de noviembre.',
                'details' => NULL,
                'type' => 'markdown_editor',
                'order' => 30,
                'group' => 'Site',
            ),
            34 => 
            array (
                'id' => 36,
                'key' => 'site.condiciones',
                'display_name' => 'Terminos y Condiciones',
                'value' => '### Términos y Condiciones

#### 1. **Información General**
Moxos Import Export S.R.L. es una empresa dedicada a la importación y comercialización de motocicletas, electrodomésticos, muebles, repuestos y otros productos relacionados. Estos términos y condiciones regulan el uso del sitio web y las compras realizadas a través del mismo.

#### 2. **Aceptación de los Términos**
Al utilizar nuestro sitio web o realizar una compra, usted acepta y se compromete a cumplir estos términos y condiciones. Moxos Import Export se reserva el derecho de modificar estos términos en cualquier momento. Le recomendamos revisar periódicamente esta página para estar al tanto de cualquier cambio.

#### 3. **Productos y Servicios**
Moxos Import Export ofrece a sus clientes:

- Venta de motocicletas de diversas marcas y modelos.
- Venta de electrodomésticos, muebles, y artículos para el hogar.
- Venta de repuestos y accesorios para motocicletas.
- Servicios de asesoramiento en la compra y mantenimiento de productos.

#### 4. **Precios y Disponibilidad**
- Todos los precios de los productos están expresados en moneda Extranjera ($us) e incluyen los impuestos aplicables.
- Los precios pueden estar sujetos a cambios sin previo aviso. 
- La disponibilidad de los productos está sujeta a existencias en nuestro almacén. En caso de falta de stock, se notificará al cliente de inmediato y se le ofrecerán alternativas o la opción de reembolso.

#### 5. **Formas de Pago**
Aceptamos los siguientes métodos de pago:

- Efectivo.
- Transferencias bancarias.
- Tarjetas de débito/crédito.
- Pagos a través de plataformas de pago digital (QR u otros).

Algunos productos pueden estar sujetos a condiciones especiales de pago, como cuotas o financiamiento, que serán informadas al momento de la compra.

#### 6. **Envíos y Entregas**
- Realizamos envíos dentro del territorio nacional de Bolivia.
- Los tiempos de entrega pueden variar según la ubicación del cliente y la disponibilidad del producto.
- Moxos Import Export no se hace responsable de retrasos por causas ajenas a la empresa, como demoras en el servicio de courier o problemas logísticos.
- El cliente es responsable de verificar que los datos de envío proporcionados sean correctos. No nos hacemos responsables por envíos a direcciones incorrectas.

#### 7. **Garantías y Devoluciones**
- Todos los productos vendidos por Moxos Import Export cuentan con la garantía del fabricante, la cual varía según el producto.
- Para hacer efectiva una garantía, el cliente deberá presentar la factura de compra y cumplir con las condiciones del fabricante.
- No se aceptarán devoluciones de productos una vez entregados, salvo que el producto presente defectos de fabricación o daños durante el envío, en cuyo caso deberá notificarse a la empresa en un plazo no mayor a 48 horas después de la entrega.

#### 8. **Repuestos y Mantenimiento**
- Moxos Import Export ofrece repuestos originales para motocicletas y otros productos. 
- Es responsabilidad del cliente seguir las recomendaciones del fabricante en cuanto al mantenimiento y uso adecuado de los productos.
- El mal uso o instalación incorrecta de los repuestos puede invalidar la garantía.

#### 9. **Uso del Sitio Web**
- Usted acepta utilizar nuestro sitio web únicamente con fines legales y de manera que no infrinja los derechos de terceros ni restrinja o impida el uso y disfrute del sitio por parte de otros.
- Está prohibido el uso del sitio web para la transmisión de contenido malicioso o para cometer actividades fraudulentas.

#### 10. **Política de Privacidad**
La información personal proporcionada por nuestros clientes será utilizada exclusivamente para procesar pedidos y mejorar nuestro servicio. No compartimos ni vendemos información personal a terceros, excepto cuando sea necesario para cumplir con la ley o procesar un pedido.

#### 11. **Limitación de Responsabilidad**
Moxos Import Export no se responsabiliza por daños indirectos, incidentales, especiales o consecuentes derivados del uso de nuestros productos o servicios. La responsabilidad máxima de la empresa, en caso de cualquier reclamo, no excederá el monto pagado por el producto o servicio en cuestión.

#### 12. **Jurisdicción y Ley Aplicable**
Estos términos y condiciones se rigen por las leyes vigentes en Bolivia. Cualquier controversia que surja en relación con estos términos será sometida a la jurisdicción de los tribunales competentes en Bolivia.

#### 13. **Contacto**
Si tiene alguna pregunta o consulta sobre estos términos y condiciones, puede ponerse en contacto con nosotros a través de:

- **Correo electrónico**: info@moxos.com.bo
- **Teléfono**: +591 346 246 00
- **Dirección**: Casa matriz, Av. 6 de Agosto, esq. 18 de noviembre.',
                'details' => NULL,
                'type' => 'markdown_editor',
                'order' => 31,
                'group' => 'Site',
            ),
            35 => 
            array (
                'id' => 37,
                'key' => 'site-social.phone',
                'display_name' => 'WhatsApp Phone',
                'value' => '67359935',
                'details' => NULL,
                'type' => 'text',
                'order' => 32,
                'group' => 'Site Social',
            ),
            36 => 
            array (
                'id' => 38,
                'key' => 'site-social.pagefacebook',
                'display_name' => 'Facebook Page',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 33,
                'group' => 'Site Social',
            ),
            37 => 
            array (
                'id' => 39,
                'key' => 'site-social.canalyoutube',
                'display_name' => 'Youtube Canal',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 34,
                'group' => 'Site Social',
            ),
            38 => 
            array (
                'id' => 40,
                'key' => 'site-social.canaltiktok',
                'display_name' => 'Tik Tok',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 35,
                'group' => 'Site Social',
            ),
            39 => 
            array (
                'id' => 41,
                'key' => 'site-social.qrserver',
                'display_name' => 'Server WhatsApp',
                'value' => 'http://localhost:3001',
                'details' => NULL,
                'type' => 'text',
                'order' => 36,
                'group' => 'Site Social',
            ),
        ));
        
        
    }
}