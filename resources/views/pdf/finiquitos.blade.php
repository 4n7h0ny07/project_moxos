<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finiquito </title>

    <style>
        .table-border {
            border: #000000 1px solid;
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            /*height: 907.087pt;*/
        }

        .border-table{
            width: 100%;
            height: 150px;
            text-align: center;
            text-anchor: middle;
        }

        .td-th {
            border: black 1px solid;
            font-family: 'Times New Roman', Times, serif;
            
        }
        .td-title{
            border: black 1px solid;
            font-family: 'Times New Roman', Times, serif;
            height: 35px;
            font-size: 10pt;
        }



        .text-center{
            font-family: 'Times New Roman', Times, serif;
            font-size: 28pt;
            text-align: center;
        }

        .span-text{
            font-family: 'Times New Roman', Times, serif;
            font-size: 9pt;
            padding-left: 25px;
            padding-right: 25px;
            text-align: justify;
            /*padding-top: 50px;
            padding-bottom: 20px;
            padding-block: 50px;*/
        }
        .p-text{
            text-align: justify;
            font-size: 10pt;
            padding-left: 75px;
            padding-right: 75px;
            padding-top: 25px;
        }
    </style>
</head>

<body>
    <table class="table-border">
        <tbody>
            <tr>
                <td class="td-th" colspan="2">
                    <table class="border-table">
                        <tr>
                            <td><img src="{{ public_path('storage/' . $logoBolivia) }}" alt="No Image" style="width:100px"></td>
                            <td> <h3 class="text-center">FINIQUITO</h3> </td>
                            <td><img src="{{ public_path('storage/' . $logoMinisterio) }}" alt="No Image" style="width:125px"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="td-title" colspan="2">
                    <span class="span-text"> I.- DATOS GENERALES</span>
                </td>
            </tr>
            {{-- //seccion de datos generales de la empresa y el trabajdor  --}}
            <tr>
                <td class="td-th" colspan="2">
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 320px"><span>RAZÓN SOCIAL O NOMBRE DE LA EMPRESA</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 330px"><span>{{$razonSocial }}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>1</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>2</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 320px"><span>RAMA DE ACTIVIDAD ECONOMICA</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 100px"><span>DOMICILIO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 224px"><span style="font-size: 8pt;">{{ $address}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 320px"><span>NOMBRE DEL TRABAJADOR</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 330px"><span> {{$finiquitos->personas->names.' '.$finiquitos->personas->apaterno.' '.$finiquitos->personas->amaterno;}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>1</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>2</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 140px"><span>ESTADO CIVIL</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 148px"><span>{{$finiquitos->personas->estado_civil}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 45px"><span>EDAD</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 45px"><span>{{ $edad }}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 90px"><span>DOMICILIO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 158px"><span style="font-size: 8pt;">{{$finiquitos->personas->direccion}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 220px"><span>PROFESION U OCUPACIÓN</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 430px"><span>{{$finiquitos->personas->cargo_work}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 23px"><span>CI</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 119px"><span> {{$finiquitos->personas->numero_carnet.' '.$finiquitos->personas->complemento.' '.$finiquitos->personas->expedito}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 150px"><span>FECHA DE INGRESO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 118px"><span>{{$finiquitos->fecha_incio}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 150px"><span>FECHA DE RETIRO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 118px"><span>{{$finiquitos->fecha_fin}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 164px"><span>MOTIVO DEL RETIRO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 150px"><span> {{$finiquitos->area}} </span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span >REMUNERACION MENSUAL</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 150px"><span>{{$finiquitos->personas->salario_work}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 170px"><span>TIEMPO DE SERVICIO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 66px"><span>{{$finiquitos->anios}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 60px"><span>AÑOS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 66px"><span>{{$finiquitos->meses}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 60px"><span>MESES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 66px"><span>{{$finiquitos->dias}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 60px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 66px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
             {{-- //end seccion de datos generales de la empresa y el trabajdor  --}}
            <tr>
                <td class="td-title" colspan="2">
                    <span class="span-text"> II.-  LIQUIDACIÓN DE LA REMUNERACIÓN PROMEDIO INDEMNIZABLE EN BASE A LOS 3 ÚLTIMOS MESES</span>
                </td>
            </tr>
            <tr>
                <td class="td-th" colspan="2">
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 214px"><span>A) MESES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 110px"><span>{{ \Carbon\Carbon::parse($mes_uno)->translatedFormat('F \\de Y') }}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 110px"><span>{{ \Carbon\Carbon::parse($mes_dos)->translatedFormat('F \\de Y') }}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 110px"><span>{{ \Carbon\Carbon::parse($mes_tres)->translatedFormat('F \\de Y') }}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 140px"><span>TOTALES</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>REMUNERACION MENSUAL</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->salario_uno, 2 )}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->salario_dos, 2 )}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->salario_tres, 2 )}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span>{{ number_format($total = $finiquitos->salario_uno +$finiquitos->salario_dos + $finiquitos->salario_tres, 2) }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>B) OTROS CONCEPTOS PERCIBIDOS EN EL MES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 110px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 110px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 110px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 141px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>BONO ANTIGUEDAD</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->antiguedad_uno, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->antiguedad_dos, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->antiguedad_tres, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span>{{ number_format($total = $finiquitos->antiguedad_uno + $finiquitos->antiguedad_dos + $finiquitos->antiguedad_tres, 2)}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>BONO FRONTERA</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->bono_uno, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->bono_dos, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->bono_tres, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right ; width: 115px"><span>{{ number_format($total= $finiquitos->bono_uno + $finiquitos->bono_dos +$finiquitos->bono_tres ,2)}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>COMISIONES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->comisiones_uno, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->comisiones_dos, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->comisiones_tres, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span>{{ number_format( $finiquitos->comisiones_uno + $finiquitos->comisiones_dos + $finiquitos->comisiones_tres,2)}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>OTROS CONCEPTOS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->otros_uno, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->otros_dos, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span>{{ number_format($finiquitos->otros_tres, 2)}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span> {{number_format($finiquitos->otros_uno + $finiquitos->otros_dos + $finiquitos->otros_tres, 2)}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 84px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 84px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 84px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table> --}}

                    @php
                            $total_uno = $finiquitos->salario_uno + $finiquitos->antiguedad_uno + $finiquitos->bono_uno + $finiquitos->comisiones_uno + $finiquitos->otros_uno;
                            $total_dos = $finiquitos->salario_dos + $finiquitos->antiguedad_dos + $finiquitos->bono_dos + $finiquitos->comisiones_dos + $finiquitos->otros_dos;
                            $total_tres = $finiquitos->salario_tres + $finiquitos->antiguedad_tres + $finiquitos->bono_tres + $finiquitos->comisiones_tres + $finiquitos->otros_tres;

                            $promedio_salary = (($total_uno + $total_dos + $total_tres) / 3) * 3;


                    @endphp
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 213px"><span>TOTAL</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span> {{ number_format( $finiquitos->salario_uno + $finiquitos->antiguedad_uno + $finiquitos->bono_uno + $finiquitos->comisiones_uno + $finiquitos->otros_uno, 2)}} </span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span> {{ number_format( $finiquitos->salario_dos + $finiquitos->antiguedad_dos + $finiquitos->bono_dos + $finiquitos->comisiones_dos + $finiquitos->otros_dos, 2)}} </span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 84px"><span> {{ number_format( $finiquitos->salario_tres + $finiquitos->antiguedad_tres + $finiquitos->bono_tres + $finiquitos->comisiones_tres + $finiquitos->otros_tres, 2)}} </span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span> @php echo $total_all = number_format($total_uno + $total_dos + $total_tres, 2) @endphp</span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="td-title" style="text-align:justify; width: 500px; height:25px ">
                    <span class="span-text"> III.-  TOTAL REMUNERACIÓN PROMEDIO INDEMNIZABLE (A + B) DIVIDIDO ENTRE 3</span>
                </td>
                <td class="td-th" style="font-size:10pt; text-align:right; width: 50px"><span> @php echo number_format($promedio_salary, 2); @endphp</span></td>
            </tr>
            <tr>
                <td class="td-th" colspan="2">
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 560px"><span>C) DESAHUCIO TRES MESES (EN CASO DE RETIRO FORZOSO)</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px">
                                    <span>
                                        @php 
                                            if ($finiquitos->area === "FORZOSO") {
                                                echo number_format($promedio_salary ,2);
                                            } 
                                            else {
                                                echo "--";
                                            }       
                                        @endphp
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @php

                            $total_payments = 0;
                            $anios_antiguedad = $finiquitos->anios * $promedio_salary;
                            $meses_antiguedad = $finiquitos->meses * ($promedio_salary / 12);
                            $dias_antiguedad = $finiquitos->dias * (($promedio_salary / 12 )/ 30);

                            $total_indemnizacion = $anios_antiguedad + $dias_antiguedad + $meses_antiguedad;

                            $meses_aguinaldo = $months * ($promedio_salary / 12);
                            $dias_aguinaldo = $dais * (($promedio_salary / 12) / 30);

                            $aguinaldo_navidad = $dias_aguinaldo + $meses_aguinaldo;

                            $payment_vacations = $finiquitos->vacations * ($promedio_salary / 30);

                            $indemnizacion_total = $total_indemnizacion + $aguinaldo_navidad + $payment_vacations;

                            if ($finiquitos->area === "FORZOSO") {
                                $total_payments = $indemnizacion_total + $promedio_salary;
                            } 
                            else {
                                $total_payments = $indemnizacion_total;
                            }       


                    @endphp
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span>D) INDEMNIZACION POR TIEMPO DE TRABAJO</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 60px"><span>{{$finiquitos->anios}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>AÑOS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 78px"><span> @php echo number_format( $anios_antiguedad,2); @endphp</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 60px"><span>{{$finiquitos->meses}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>MESES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 78px"><span> @php echo number_format( $meses_antiguedad,2); @endphp</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 60px"><span>{{$finiquitos->dias}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 78px"><span> @php echo number_format( $dias_antiguedad,2); @endphp</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span> @php echo number_format($total_indemnizacion, 2) @endphp</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span>AGUINALDO NAVIDAD</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 60px"><span>{{$months}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>MESES Y</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 50px"><span>{{$dais}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 48px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span> @php echo number_format($aguinaldo_navidad, 2 ) @endphp</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span>VACACIONES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 60px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>MESES Y </span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:center; width: 50px"><span>{{ $finiquitos->vacations}}</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 48px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:right; width: 115px"><span>@php echo number_format($payment_vacations,2) @endphp</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 279px"><span>PRIMA LEGAL (SI CORRESPONDE)</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 60px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 73px"><span>MESES Y</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 50px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 48px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 45px"><span>OTROS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 510px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 188px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 80px"><span>GESTION</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 100px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 40px"><span>DE</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 69px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 54px"><span>DIAS</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span>Bs.</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 115px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="td-title" style="text-align:justify; width: 500px">
                    <span class="span-text"> IV.-  TOTAL BENEFICIOS SOCIALES C + D</span>
                </td>
                <td class="td-th" style="font-size:10pt; text-align:right; width: 120px"><span> @php echo number_format($total_payments, 2) @endphp</span></td>
            </tr>
            <tr>
                <td class="td-th" colspan="2">
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span>E) DEDUCCIONES</span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px">Bs.<span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px">Bs.<span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px">Bs.<span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px">Bs.<span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody >
                            <tr>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 131px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 200px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 20px">Bs.<span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 87px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                                <td class="td-th" style="font-size:9.5pt; text-align:justify; width: 120px"><span></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="td-title" >
                    <span class="span-text"> V.- IMPORTE LIQUIDO A PAGAR  C + D - E</span>
                </td>
                <td class="td-th" style="font-size:10pt; text-align:justify; width: 120px"><span></span></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table class="table-border">
        <tbody>
            <tr>
                <td class="td-th" style="width:700px">
                    <br>
                        <span class="span-text">FORMA DE PAGO:</span><br>
                        <span class="span-text" style="padding-left: 100px">EFECTIVO: (&nbsp;&nbsp;) CHEQUE: (&nbsp;&nbsp;) N°: ............................................................,&nbsp;&nbsp; C/BANCO: ............................................................</span>
                        <br><br><span class="span-text">IMPORTE DE LA SUMA CANCELADA: &nbsp;&nbsp;............................................................................................................................................................. <br><br>.............................................................................................................................................................................................................................................</span> 
                        <br>                  
                </td>
            </tr>
            <tr>
                <td class="td-th"><br>
                    {{-- <span class="span-text" style="padding-left: 20px !important; text-align:justify;">
                        YO &nbsp;&nbsp; .................................................................................................................................................................................................................................., NAYOR DE EDAD, CON C.I. N° ............................., DECLARO QUE EN LA FECHA RECIBO A MI ENTERA SATISFACCION, EL IMPORTE DE .........................., POR CONCEPTO DE LA LIQUIDACIÓN DE MIS BENEFICIOS SOCIALES, DE CONFORMIDAD CON LA LEY GENERAL DEL TRABAJO, SU DECRETO REGLAMENTARIO Y DISPOSICIONES CONEXAS
                    </span> --}}
                    <p class="span-text">
                        YO &nbsp;&nbsp; <span style="text-align: right !important;">{{$finiquitos->personas->names.' '.$finiquitos->personas->apaterno.' '.$finiquitos->personas->amaterno;}}</span> .................................................................................................................................................................................................................................., NAYOR DE EDAD, CON C.I. N° ............................., DECLARO QUE EN LA FECHA RECIBO A MI ENTERA SATISFACCION, EL IMPORTE DE .........................., POR CONCEPTO DE LA LIQUIDACIÓN DE MIS BENEFICIOS SOCIALES, DE CONFORMIDAD CON LA LEY GENERAL DEL TRABAJO, SU DECRETO REGLAMENTARIO Y DISPOSICIONES CONEXAS
                    </p>
                    <br>
                    <p class="span-text" style="text-align: center;">
                        LUGAR Y FECHA ............................................., .................. DE .......................................... DE .................................................
                    </p>
                    <br>
                   <table>
                        <tbody>
                            <tr>
                                <td style="text-align: center; width:350px ">
                                    <p class="span-text" style="text-align: center;">..................................................................... <br>
                                        INTERESADO
                                    </p>
                                </td>
                                <td style="text-align: center; width:350px ">
                                    <p class="span-text" style="text-align: center;">
                                        ..................................................................... <br>
                                            GERENTE GENERAL
                                        
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                   </table>
                   <br><br><br>
                   <br>
                   <br>
                   <table>
                    <tbody>
                        <tr>
                            <td style="text-align: center; width:350px ">
                                <p class="span-text" style="text-align: center;">..................................................................... <br>
                                    Vo. Bo. MINISTERIO DE TRABAJO
                                </p>
                            </td>
                            <td style="text-align: center; width:350px ">
                                <br>
                                <p class="span-text" style="text-align: center;">
                                   
                                        SELLO
                                    
                                </p>
                            </td>
                        </tr>
                    </tbody>
               </table>
               <br>
                </td>
            </tr>
            <tr>
                <td class="td-th" style=" width:700px "><br><br><br>
                <br>
                <br>
                    <span  style="padding: 200px; text-align:center; font-size: 24pt;">INSTRUCCIONES</span>
<br><br>
                    <ol style="padding-left: 90px; padding-right:90px; text-align:justify; ">
                        <li>En todos los casos en los cuales profceda el pago de beneficios sociales y que no esten conprendiodos en el despido por las causales en el Art. 16 de la Ley General del Trabajo y el Art. 9 de su Reglamento, el Finiquito de contrato de suscribira en el presente FORMULARIO</li>
                        <li>Los señores Directores, Jefes Departamentales e Inspectores Regionales, son los unicos funcionarios facultados para revisar y refrendar todo Finiquito de contrato de Trabajo, con cuya intervencion alcanzara la correspondiente eficacia juridica, en aplicacion del Art. 22 de la Ley General del Trabajo</li>
                        <li>Las partes intervinientes en la suscripcion del presente FINIQUITO, deberan acreditar su identidad personal con los documentos señalados por ley.</li>
                        <li>Este Formulario no se constituye Ley entre partes por su caracter esencialmente revisable, por lo tanto las cifras en el contenidad no causan estado ni revisen el sello de cosa jusgada</li>
                    </ol>
                    <br><br><br><br><br><br><br>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
