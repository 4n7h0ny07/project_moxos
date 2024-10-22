<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
            text-transform: uppercase;
        }

        .thead-pdf-table {
            color: white;
            font-size: 11pt !important;
            background-color: rgba(10, 10, 105, 0.856);
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
            border-top-left-radius: 0.3em;
            border-top-right-radius: 0.3em;
            text-align: center !important;
        }

        .tbody-pdf {
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
            border-bottom-left-radius: 0.5em;
            border-bottom-right-radius: 0.5em
        }

        .tbody-periodo-pdf {
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
            border-bottom-left-radius: 0.5em;
            border-bottom-right-radius: 0.5em
        }

        .tr-body-pdf {
            border: ridge;
            border-color: rgba(10, 10, 105, 0.856);
        }

        .div-border-pdf {

            border-top-color: rgba(10, 10, 105, 0.856);
            border-right-color: rgba(10, 10, 105, 0.856);
            border-bottom-color: rgba(10, 10, 105, 0.856);
            border-left-color: rgba(10, 10, 105, 0.856);
        }

        .strike-through {
            text-decoration: line-through;
            text-decoration-style: double !important;
            text-decoration-skip: line-through;
            text-underline-offset: -3px;
            text-decoration-color: rgba(10, 10, 105, 0.856);
            color: rgb(170, 1, 1);
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

        .contenedor {
            display: flex;
            align-items: center;
            /* Alinea verticalmente el cuadrado y el texto */
            justify-content: center;
            /* Centra el contenido horizontalmente */
            gap: 20px;
            /* Espacio entre el cuadrado y el texto */
            margin-top: 20px;
            text-align: center;
        }

        .cuadrado {
            width: 20px;
            height: 20px;
            background-color: white;
            /* Fondo blanco */
            border: 2px solid rgba(10, 10, 105, 0.856);
            /* Borde de 5px con color verde */
            margin: 20px auto;
            /* Centra el cuadrado horizontalmente */
        }

        .texto {
            font-size: 18px;
            color: #333;
            /* Color del texto */
            margin: 20px auto;
            /* Centra el cuadrado horizontalmente */
            text-align: center;
        }

        .cuadernillo {
            width: 100%;
            height: 100px;
            /*border: 1px solid #ccc;*/
            /* Borde alrededor del cuadernillo */
            position: relative;
        }

        .linea {
            width: 100%;
            height: 1px;
            background-color: rgba(10, 10, 105, 0.856);
            /* Color de las líneas */
            margin: 5mm 0;
            /* Espacio entre las líneas */
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <img src="{{ public_path('storage/' . $logoUrl) }}" alt="No Image" style="width:235px">
                </td>
                <td style="text-align: center !important; color:rgba(10, 10, 105, 0.856)">
                    <h3>FORMULARIO DE SOLICITUD <br> <small>VACACIONES & PERMISOS</small></h3>
                    @switch($vacations->type_vacations)
                        @case('Programada')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break

                        @case('Medico')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break

                        @case('Emergencia familiar')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA
                                    FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break

                        @case('Caso fortuito')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA
                                    FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break

                        @case('Motivo personal')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA
                                    FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break

                        @case('Otros')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PROGRAMADA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MEDICO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">EMERGENCIA
                                    FAMILIAR
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CASO FORTUITO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">MOTIVO PERSONAL
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">OTRO
                                </label>
                            </div>
                        @break
                    @endswitch
                    <b style="color: rgb(250, 3, 3); font-size:13pt; font-weight:bold">N°
                        {{ $vacations->number }}/@php echo DATE('Y')@endphp</b>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td width="50%">
                <div class="col-md-7" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span> Solicitado por: <b
                            style="color: black important;">{{ $vacations->personas->names . ' ' . $vacations->personas->apaterno . ' ' . $vacations->personas->amaterno }}</b></span>
                </div>
            </td>
            <td width="40%">
                <div class="col-md-5" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span>Fecha de Solicitud: <b style="color: black important;">
                            {{ \Carbon\Carbon::parse($vacations->created_at)->translatedFormat('d \\de F \\de Y') }}</b></span>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <thead>
            <th colspan="3" class="thead-pdf">
                DATOS DE LA SOLICITUD {{ $vacations->type_solicitud }}
            </th>
        </thead>
        <tbody class="tbody-pdf">
            <br>
            <tr>
                <td colspan="3" style="width: 50mm !important">
                    <table width="100%">
                        <thead class="thead-pdf-table">
                            <tr>
                                <th>SUCURSAL
                                </th>
                                <th>AREA
                                </th>
                                <th>CARGO
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tbody-pdf">
                            <tr style="text-align: center;">
                                <td><span style="text-align: center; font-size: 10pt;"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">{{ $vacations->sucursal }}</b></span>
                                </td>
                                <td><span style="text-align: center; font-size: 10pt;"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">{{ $vacations->area }}</b></span>
                                </td>
                                <td><span style="text-align: center; font-size: 10pt;"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">{{ $vacations->cargo }}</b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>

            </tr>
            <br>
            <tr>
                <td style="width: 85mm !important">
                    <table width="100%">
                        <thead class="thead-pdf-table">
                            <th colspan="2" >
                                PERIODO O GESTION
                            </th>
                        </thead>
                        <tbody class="tbody-pdf">
                            <tr style="text-align: center;">
                                <td><span style="text-align: center; font-size: 10pt;"><b {{-- <span>{{ \Carbon\Carbon::parse($dataTypeContent->created_at)->translatedFormat('d \\de F \\de Y') }}</span> --}}
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">Periodo
                                            Inicio</b>
                                            @if ($vacations->periodo_inicio === null) 
                                                    <br><span style="color: rgba(105, 105, 105, 0.466)"> No se indica el periodo</span>
                                            @else
                                                <br>{{ \Carbon\Carbon::parse($vacations->periodo_inicio)->translatedFormat('d \\de F \\de Y') }}
                                            
                                            @endif
                                            </span>
                                </td>
                                <td><span style="text-align: center; font-size: 10pt;"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">Periodo
                                            Fin</b>
                                            @if ($vacations->periodo_inicio === null) 
                                                    <br><span style="color: rgba(105, 105, 105, 0.466)"> No se indica el periodo</span>
                                            @else
                                                <br>{{ \Carbon\Carbon::parse($vacations->periodo_fin)->translatedFormat('d \\de F \\de Y') }}
                                            
                                            @endif
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td colspan="2">
                    <table width="100%">
                        <thead class="thead-pdf-table">
                            <th colspan="3" >
                                DIAS Y FECHAS DE SOLICITUD
                            </th>
                        </thead>
                        <tbody class="tbody-pdf">
                            <tr style="text-align: center; font-size: 10pt;">
                                <td><span style="text-align: center"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">Dias
                                            solicitados: </b><br>{{ $vacations->dias }}</span></td>
                                <td><span style="text-align: center"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">Fecha
                                            Inicio:</b><br>{{ \Carbon\Carbon::parse($vacations->fecha_incio)->translatedFormat('d \\de F \\de Y') }}</span>
                                </td>
                                <td><span style="text-align: center"><b
                                            style="text-align:center; font-size: 10pt; color:rgba(10, 10, 105, 0.856)">Fecha
                                            Fin:</b><br>{{ \Carbon\Carbon::parse($vacations->fecha_fin)->translatedFormat('d \\de F \\de Y') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <br>
            <tr style="border: rgba(10, 10, 105, 0.856) 0.5em soild;">

                <td width="35%">
                    <div class="contenedor">
                        <div class="cuadrado"></div>
                        <b class="texto">ACEPTADA</b>
                    </div>

                </td>
                <td colspan="2" width="65%">
                    <div class="contenedor">
                        <div class="cuadrado"></div>
                        <b class="texto">RECHAZADA</b>
                    </div>
                </td>
            </tr>
            <br><br>
            {{-- <tr>
                <td colspan="2">
                    <span style="font-size: 11pt; color:rgba(10, 10, 105, 0.856)">REGULACION DE DIAS</span>
                    <div class="cuadernillo">
                        <div class="linea"></div>
                        <div class="linea"></div>
                        <div class="linea"></div>
                        <div class="linea"></div>
                        <div class="linea"></div>
                        <div class="linea"></div>
                        <div class="linea"></div>

                    </div>
                </td>
            </tr> --}}
            <tr style="border: ridge; border-radius:0.5em; border-color:rgba(10, 10, 105, 0.856);">
                <td colspan="3" width="100%">
                    <div style="height: 18mm">
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:8pt;"><b
                                class="text-right">Observacion: </b></span><br>
                        <span style="font-size:10pt "><b> {{ $vacations->observaciones }}</b></span>
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
                        <span>.....................................................<br>Firma Solicitado Por </span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
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
                        <span><br>fecha: ......................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Autorizado Por</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: .......................................</span>
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <span>.....................................................<br>Firma Recibido RRHH Por</span>
                        <span style="text-align:left !important"><br>Nombre o Sello</span>
                        <br>
                        <br>
                        <br>
                        <span><br>fecha: .......................................</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4" heigth="35mm">
                    <div class="text-center"
                        style=" heigth: 40mm !important; text-align: center !important; border: ridge; border-radius:1em;">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size:12pt "><b>AUTORIZACIÓN:</b>Para la
                            Autorización debera adjuntarse toda la documentación necesaria
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
