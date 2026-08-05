<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 05 - Baja</title>

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
                    <h3>FICHA TECNICA DE ACTIVO FIJO<br> <small>CODIGO: {{ $bajas->code }}</small></h3>
                    {{-- <b style="color: rgb(250, 3, 3); font-size:9pt; font-weight:bold">Fecha de Compra: 
                        {{ \Carbon\Carbon::parse($bajas->date_compra)->translatedFormat('d \\de F \\de Y') }}</b> --}}
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td width="55%">
                <div class="col-md-7" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    {{-- <span> Solicitante: <b style="color: black important;">{{ $bajas->user->name }}</b></span> --}}
                </div>
            </td>
            <td width="45%">
                <div class="col-md-5" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span>Fecha de compra: <b
                            style="color: black important;">{{ \Carbon\Carbon::parse($bajas->date_compra)->translatedFormat('d \\de F \\de Y') }}</b></span>
                    </b></span>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <thead>
            <th colspan="5" class="thead-pdf">
                DESCRIPCION COMPLETA DEL ACTIVO
            </th>
        </thead>
        <tbody class="tbody-pdf">
            <tr>
                <td colspan="5" heigth="74mm">
                    <div style="height: 45mm; font-size:11pt; text-align:justify;">
                        {!! $bajas->description !!}
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Responzable de Activo: </span>
                    {{ $bajas->personas->names . ' ' . $bajas->personas->apaterno . ' ' . $bajas->personas->amaterno }}
                </td>
            </tr>
            <tr style="border: rgba(10, 10, 105, 0.856) 0.5em soild;">

                {{-- <td style="width: 40%; height:10mm">
                    <span>Fecha de Compra: </span> @php echo date('d F Y', strtotime($printer->created_at)); @endphp
                </td> --}}
                <td style="width: 15%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Vida Util: </span><br>
                    {{ $bajas->vidautil }} años.
                </td>
                <td style="width: 15%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Costo: </span><br>
                    {{ number_format($bajas->coste, 2) }}
                </td>
                <td style="width: 15%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Meses: </span><br>
                    {{ $mesesTranscurridos }}
                </td>
                <td style="width: 15%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Depreciacion: </span><br>
                    {{ number_format($depreciacionAcumulada, 2, ',', '.') }}
                </td>
                <td style="width: 15%; height:10mm">
                    <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; ">Valor Actual: </span><br>
                    {{ number_format($valorActual, 2, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="col-md-12">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size: 11pt; text-align:center;">Datos Necesarios
                        </p>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "> <strong>FECHA DE COMPRA: </strong>
                        {{ \Carbon\Carbon::parse($bajas->date_compra)->translatedFormat('d \\de F \\de Y') }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Marca:
                            </strong></span><span style="font-size: 11pt;">{{ $bajas->marca }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Modelo:
                            </strong></span><span style="font-size: 11pt;">{{ $bajas->modelo }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Nombre del
                                Activo: </strong></span><span style="font-size: 11pt;">{{ $bajas->name }}</span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size: 11pt;"><strong>Numero
                                Serie: </strong></span><span style="font-size: 11pt;">{{ $bajas->serial }}</span>


                    </div>
                </td>

                <td style ="vertical-align:text-top;" width="15%">
                    <div class="col-md-12 text-center"
                        style="/*height: 75mm !important;*/ /*border: ridge; border-radius:1em; border-color: rgba(10, 10, 105, 0.856);*/">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size: 11pt; text-align:center;">Qr Data</p>
                        {{-- @php
                            // Normalizar la ruta para la URL pública
                            $publicImagePath = str_replace('\\', '/', $bajas->imagenes);
                            $icon = $publicImagePath ? url('storage').'/'.$publicImagePath : asset('images/no_images.png');

                        @endphp
                        <img src="{{ $icon }}" alt="no image" style="width:75px; text-align:center"> --}}
                        <img src="data:image/png;base64,{{ $QrCode }}" width="125" alt="Código QR">
                    </div>
                </td>
            </tr>
            <tr style="border: ridge; border-radius:0.5em; border-color:rgba(10, 10, 105, 0.856);">
                <td colspan="2" width="100%">
                    <div style="height: 18mm">
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:8pt;"><b class="text-right">Observacion:
                            </b></span><br>

                        <span style="font-size:10pt "><b> {{ $bajas->observations }}</b></span>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
    <br>
    <br>
    <br>

   
    <div class="footer">
        <table width="100%">
            <tr>
                <td>
                    <div style="text-align: center">
                        <span>..............................................<br>Firma Solicitado Por </span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>...............................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Jefe de Area V° B°</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: ........................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>..............................................<br>Firma Recibido Por</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: ........................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>..............................................<br>Firma Autorizado Por</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: ........................................</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4" heigth="35mm">
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
