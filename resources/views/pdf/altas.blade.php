<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario 04</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif
        }

        #watermark {
            position: fixed;
            top: 250px;
            opacity: 0.1;
            z-index: -1;
            width: 100%;
            text-align: center
        }

        #watermark img {
            position: relative;
            width: 300px;
            /* left: 220px; */
        }

        .thead-pdf {
            color: white;
            background-color: rgba(10, 10, 105, 0.856);
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
            border-top-left-radius: 0.5em;
            border-top-right-radius: 0.5em;
            text-align: center !important;
        }

        .tbody-pdf {
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
            border-bottom-left-radius: 0.5em;
            border-bottom-right-radius: 0.5em
        }

        .tr-body-pdf {
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            /*background-color: #f0f0f0;*/
            padding: 0;
            font-size: 12px;
            color: rgba(10, 10, 105, 0.856);
            /*border-top: 1px solid #ccc;*/
        }
    </style>
</head>

<body>
    {{-- @php
        $icon = setting('admin.icon_image') ? url('storage').'/'.setting('admin.icon_image') : asset('images/icon.png');
    @endphp --}}
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <img src="{{ public_path('storage/' . $logoUrl) }}" alt="No Image" style="width:235px">
                </td>
                <td style="text-align: center !important; color:rgba(10, 10, 105, 0.856)">
                    <h3>FORMULARIO DE SOLICITUD DE ALTA <br> <small>DE ACTIVO FIJO</small></h3>
                    <b style="color: rgb(250, 3, 3); font-size:13pt; font-weight:bold">N°
                        {{ $altas->numero_activo }}/@php echo DATE('Y')@endphp</b>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td width="55%">
                <div class="col-md-7" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span> Solicitante: <b style="color: black important;">{{ $altas->user->name }}</b></span>
                </div>
            </td>
            <td width="45%">
                <div class="col-md-5" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span>Fecha Solicitud: <b style="color: black important;">{{ \Carbon\Carbon::parse($altas->created_at)->translatedFormat('d \\de F \\de Y') }}</b></span> </b></span>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <thead>
            <th colspan="3" class="thead-pdf">
                DESCRIPCION COMPLETA DEL ACTIVO
            </th>
        </thead>
        <tbody class="tbody-pdf">
            <tr>
                <td colspan="3" heigth="74mm">
                    <div style="height: 64mm; font-size:11pt; text-align:justify;">
                        {!! $altas->description !!}
                    </div>

                </td>
            </tr>
            <tr style="border: rgba(10, 10, 105, 0.856) 0.5em soild;">

                {{-- <td style="width: 40%; height:10mm">
                    <span>Fecha de Compra: </span> @php echo date('d F Y', strtotime($printer->created_at)); @endphp
                </td> --}}
                <td style="width: 30%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Vida Util: </span>
                    {{ $altas->vida_util }} años.
                </td>
                <td style="width: 30%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Costo de Compra: </span>
                    {{ number_format($altas->costo, 2) }}
                </td>
                {{-- <td width="65%">
                    <div style="width: 100%;">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right">Proveedor:
                            </b></p>

                        <span><b> {{ $altas->personas->names.' '.$altas->personas->apaterno.' '.$altas->personas->amaterno }}</b></span><br><br><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right">Anticipo
                                al Proveedor Monto $us/Bs.: </b></span>
                        <span style="font-size:11pt; "><b class="text-left" style="text-align: right !important;">@php  echo number_format($altas->costo,2);@endphp</b></span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right"
                                style="text-align: left !important;">Total a Pagar $us/Bs.: </b></span>
                        <span style="font-size:11pt; text-align:right !important;"><b class="text-right">@php  echo number_format($altas->costo,2);@endphp</b></span>
                    </div>
                </td> --}}
            </tr>
            <tr>
                <td colspan="3">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Activar como responsable a: </span>
                    {{ $altas->personas->names .' '.$altas->personas->apaterno.' '.$altas->personas->amaterno }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="col-md-12">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size: 11pt; text-align:center;">Datos Necesarios
                        </p>
                        <span
                            style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Marca: </strong></span><span
                            style="font-size: 11pt;">{{ $altas->marca }}</span><br>
                        <span
                            style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Modelo: </strong></span><span
                            style="font-size: 11pt;">{{ $altas->modelo }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Nombre del
                                Activo: </strong></span><span
                            style="font-size: 11pt;">{{ $altas->nombre_activo }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Numero
                                Serie: </strong></span><span style="font-size: 11pt;">{{ $altas->serial }}</span>


                    </div>
                </td>

                <td style ="vertical-align:text-top;">
                    <div class="col-md-12"
                        style="/*height: 75mm !important;*/ /*border: ridge; border-radius:1em; border-color: rgba(10, 10, 105, 0.856);*/">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size: 11pt; text-align:center;">Foto/Iamgen</p>
                        {{-- @php
                            // Normalizar la ruta para la URL pública
                            $publicImagePath = str_replace('\\', '/', $altas->imagenes);
                            $icon = $publicImagePath ? url('storage').'/'.$publicImagePath : asset('images/no_images.png');

                        @endphp
                        <img src="{{ $icon }}" alt="no image" style="width:75px; text-align:center"> --}}
                    </div>
                </td>
            </tr>
            <tr style="border: ridge; border-radius:0.5em; border-color:rgba(10, 10, 105, 0.856);">
                <td colspan="2" width="100%">
                    <div style="height: 18mm">
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:8pt;"><b class="text-right">Observacion:
                            </b></span><br>

                        <span style="font-size:10pt "><b> {{ $altas->observation }}</b></span>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
    <br>
    <br>
    <br>

    {{-- <table width="100%" style="color: rgba(10, 10, 105, 0.856); font-size:9pt ">
        <tr>
            <td>
                <div style="text-align: center">
                    <span>.....................................................<br>Firma Solicitado Por </span>
                    <span style="text-align:left !important"><br>Nombre o Sello</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <span><br>.....................................................</span>
                </div>
            </td>
            <td>
                <div style="text-align: center">
                    <span>.....................................................<br>Firma Jefe de Area V° B°</span>
                    <span style="text-align:left !important"><br>Nombre o Sello</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <span><br>fecha: ..............................................</span>
                </div>
            </td>
            <td>
                <div style="text-align: center">
                    <span>.....................................................<br>Firma Autorizado Por</span>
                    <span style="text-align:left !important"><br>Nombre o Sello</span>
                    <br>
                    <br>
                    <span><br>Monto Aut.: .........................................</span>
                    <br>
                    <span><br>fecha: ..............................................</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" heigth="40mm">
                <div class="text-center"
                    style=" heigth: 40mm !important; text-align: center !important; border: ridge; border-radius:1em;">
                    <p style="color: rgba(10, 10, 105, 0.856); font-size:12pt "><b>ACTIVACION:</b>
                        Para la activacion debera adjuntarse una copia de la factura de la compra
                    </p>
                </div>
            </td>
        </tr>
    </table> --}}
    <div class="footer">
        <table width="100%">
            <tr>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Solicitado Por </span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <br>
                        <span><br>.....................................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Jefe de Area V° B°</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: ..............................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Autorizado Por</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <span><br>Monto Aut.: .........................................</span>
                        <br>
                        <span><br>fecha: ..............................................</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" heigth="35mm">
                    <div class="text-center"
                        style=" heigth: 40mm !important; text-align: center !important; border: ridge; border-radius:1em;">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size:12pt "><b>ACTIVACION:</b>Para la
                            Activacion debe adjuntarse la factura de compra
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
