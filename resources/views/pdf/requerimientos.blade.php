<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM_1-REQUERIMIENTOS</title>

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
                    <h3>FORMULARIO DE REQUERIMIENTO INTERNO <br> <small>MATERIALES, SUMINISTROS Y OTROS</small></h3>
                    @switch($requerimientos->type_requerimient)
                        @case('Compra')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">COMPRA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PAGO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">FONDO EN AVANCE
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CONSUMO
                                </label>
                            </div>
                        @break

                        @case('Pago')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">COMPRA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PAGO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">FONDO EN AVANCE
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CONSUMO
                                </label>
                            </div>
                        @break

                        @case('Fondo en Avance')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">COMPRA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PAGO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">FONDO EN
                                    AVANCE
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CONSUMO
                                </label>
                            </div>
                        @break

                        @case('Consumo')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">COMPRA
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">PAGO
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">FONDO EN
                                    AVANCE
                                </label>
                                <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                    style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">CONSUMO
                                </label>
                            </div>
                        @break
                    @endswitch
                    <b style="color: rgb(250, 3, 3); font-size:13pt; font-weight:bold">N°
                        {{ $requerimientos->number_requerimient }}/@php echo DATE('Y')@endphp</b>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td width="55%">
                <div class="col-md-7" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span> Solicitante: <b style="color: black important;">{{ $requerimientos->user->name }}</b></span>
                </div>
            </td>
            <td width="45%">
                <div class="col-md-5" style="font-size: 10pt; color:rgba(10, 10, 105, 0.856)">
                    <span>Fecha Solicitud: <b style="color: black important;"> {{ \Carbon\Carbon::parse($requerimientos->created_at)->translatedFormat('d \\de F \\de Y') }}</b></span> </b></span>
                    
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <thead>
            <th colspan="3" class="thead-pdf">
                DESCRIPCION DEL PRODUCTO, CANTIDAD Y PRECIO
            </th>
        </thead>
        <tbody class="tbody-pdf">
            <tr>
                <td colspan="3" heigth="74mm">
                    <div style="height: 74mm; font-size:11pt; text-align:justify;">
                        {!! $requerimientos->detail_requerimient !!}
                    </div>

                </td>
            </tr>
            <tr style="border: rgba(10, 10, 105, 0.856) 0.5em soild;">

                <td width="30%">

                    <div style="width: 100%">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size:10pt "><b
                                style="text-align: center !important">Documento Adjunto: </b></p>
                        @switch($requerimientos->document_requerimient)
                            @case('Factura')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                        readonly="readonly" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Factura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        readonly="readonly"id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Proforma
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Nota de
                                        venta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Otros
                                    </label>
                                </div>
                            @break

                            @case('Proforma')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Factura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                        readonly="readonly" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Proforma
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Nota de
                                        venta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Otros
                                    </label>
                                </div>
                            @break

                            @case('Nota de Venta')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Factura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Proforma
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                        readonly="readonly" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Nota
                                        de
                                        venta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Otros
                                    </label>
                                </div>
                            @break

                            @case('Otros')
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Factura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Proforma
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" readonly="readonly"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Nota
                                        de
                                        venta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" role="switch" checked="checked"
                                        readonly="readonly" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"
                                        style="color:rgba(10, 10, 105, 0.856); font-size:10pt; font-weight:bold">Otros
                                    </label>
                                </div>
                            @break
                        @endswitch
                    </div>

                </td>
                <td width="45%">
                    <div style="width: 100%;">
                        <p style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right">Proveedor:
                            </b></p>

                        <span><b>
                                {{ $requerimientos->personas->names . ' ' . $requerimientos->personas->apaterno . ' ' . $requerimientos->personas->amaterno }}</b></span><br><br><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right">Anticipo
                                al Proveedor Monto </b>
                            @if ($requerimientos->currency_requerimient === '$us/')
                                <b> $us</b>/<b class="strike-through">Bs.</b><b>:</b>
                            @elseif ($requerimientos->currency_requerimient === 'Bs/')
                                <b class="strike-through"> $us.</b>/<b>Bs.</b><b>:</b>
                            @else
                                <b class="strike-through"> $us/Bs.:</b>
                            @endif
                        </span>
                        <span style="font-size:11pt; "><b class="text-left"
                                style="text-align: right !important;">@php  echo number_format($requerimientos->advance_payment,2);@endphp</b></span><br>
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:9pt; "><b class="text-right"
                                style="text-align: left !important;">Total a Pagar </b>
                            @if ($requerimientos->currency_requerimient === '$us/')
                                <b> $us</b>/<b class="strike-through">Bs.</b><b>:</b>
                            @elseif ($requerimientos->currency_requerimient === 'Bs/')
                                <b class="strike-through"> $us.</b>/<b>Bs.</b><b>:</b>
                            @else
                                <b class="strike-through"> $us/Bs.</b><b>:</b>
                            @endif
                        </span>
                        <span style="font-size:11pt; text-align:right !important;"><b
                                class="text-right">@php  echo number_format($requerimientos->total_payment,2);@endphp</b></span>
                    </div>
                </td>
                <td width="25%">
                    <p style="color: rgba(10, 10, 105, 0.856); font-size:10pt "><b
                        style="text-align: center !important">Qr Data: </b></p>
                    <img src="data:image/png;base64,{{ $QrCode }}" width="125" alt="Código QR">
                </td>
            </tr>
            <tr style="border: ridge; border-radius:0.5em; border-color:rgba(10, 10, 105, 0.856);">
                <td colspan="2" width="100%">
                    <div style="height: 18mm">
                        <span style="color: rgba(10, 10, 105, 0.856); font-size:8pt;"><b
                                class="text-right">Observacion: </b></span><br>
                        <span style="font-size:10pt "><b> {{ $requerimientos->observation_requerimient }}</b></span>
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
