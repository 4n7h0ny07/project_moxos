<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Cancelación de Deuda</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            position: relative;
        }

        .watermark {
            position: fixed;
            top: -30;
            left: 0;
            width: 100%;
            height: 100%;
            /*z-index: 10;
            /*opacity: 0.1;*/
            text-align: center;
        }

        .watermark img {
            top: -100px;
            margin-top: 0% !important;
            width: 110%;
            height: auto;
            margin-top:0px;
            z-index: 10;
        }

        .content {
            /*margin-top: 300px;*/
            text-align: justify;
            margin-top: 150px;
            margin-right: 50px;
            width: 190mm;
            /*padding: 10%;*/
        }

        .header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center !important;
        }

        .certifica {
            font-size: 22px;
            margin-top: 40px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: left !important;
        }

        .firma {
            font-size: 14px;
            margin-top: 150px;
            text-align: center !important;
        }

        .signature-line {
            display: block;
            margin-top: 80px;
            border-top: 1px solid #000;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
         /* Pie de página */
         .footer {
            font-size: 9pt;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            /*height: 50px;*/
            background-color: #f8f8f8;
            padding: 5px;
            text-align: center;
            border-top: 1px solid #3a0101;
        }

       
    </style>
</head>
<body>

    <!-- Marca de agua -->
    <div class="watermark">
        <img src="{{ public_path('storage/' . $logoUrl) }}" alt="Marca de agua">
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <div class="header">CERTIFICADO DE NO ADEUDO</div>
        <br><br><br>

         <p>{!! $representante !!}</p>
        
        <p class="certifica">CERTIFICA QUE:</p>

        <p>El/La señor(a): <strong>{{$persona->names.' '.$persona->apaterno.' '.$persona->amaterno}}</strong> CI. {{$persona->numero_carnet}} - {{$persona->expedito}}, de acuerdo a nuestro sistema de reportes de pagos y conforme a original presentado por el solicitante <b>NO FIGURA ADEUDO alguno, NI COMO CLIENTE, NI COMO GARANTE</b>, por lo que al presente no tiene deuda pendiente con la Empresa.</p>

        <p>Es todo en cuanto certifico en honor a la verdad para fines consiguientes.</p>
        <br><br><br>
        <div class="firma">

            <p>{{  $ciudad }}</p>


        </div>
    </div>

    <!-- Pie de página -->
    {{-- <div class="footer">
        <p>{{setting('admin.title') .' - '. setting('admin.description')}} - Todos los derechos reservados - &copy; {{ date('Y') }}</p>

    </div> --}}
    <!-- Pie de página con tres colores -->
  

</body>
</html>
