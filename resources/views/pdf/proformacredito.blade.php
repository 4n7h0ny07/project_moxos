<!-- resources/views/credit-pdf.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Crédito</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .header img {
            max-width: 120px;
        }

        .header h1 {
            margin: 10px 0;
        }

        .proforma-info {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        .table,
        .th,
        .td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }

        .th-font {
            font-size: 8pt !important;

        }
        .text-h2{
            font-size: 22pt !important;
            color:rgba(10, 10, 105, 0.856);
            /*font-style: */
            font-weight: bold;
            font-family :-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .text-right {
            text-align: right !important;
            width: 45mm;
        }

        .cuadrado {
            width: 20px;
            height: 20px;
            background-color: white;
            /* Fondo blanco */
            border: 2px solid rgba(10, 10, 105, 0.856);
            /* Borde de 5px con color verde */
            /*margin: 20px auto;*/
            /* Centra el cuadrado horizontalmente */
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="{{ public_path('storage/' . $logoBolivia) }}" alt="Logo de la Empresa" width="200px">
                </td>
                <td>
                    <div style="text-align: center">
                        <!-- Aquí puedes cambiar la ruta al logo de tu empresa -->
                        <span class="text-h2">{{ $company_name }}</span><br>
                        <span>Proforma de Crédito</span><br>
                        <span style="font-size: 8pt; color:crimson">Fecha de emisión: {{ $date }}</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <span
        style="font-size: 10pt">Cliente:...................................................................................................
    </span> <span style="font-size: 9pt; text-align:right; margin-left: 85px;">Requisitos Cliente y Garante</span>
    <table>
        <tr >
            <th style="background-color: rgba(169, 169, 169, 0.76)">Precio Contado</th>
            <td class="text-right">{{ number_format($precioContado, 2) }}</td>
            <th class="th-font">Fotocopia de carnet</th>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            
        </tr>
        <tr>
            <th style="background-color: rgba(169, 169, 169, 0.76)">Cuota Inicial</th>
            <td class="text-right">{{ number_format($cuotaInicial, 2) }}</td>
            <th class="th-font">Boleta, Planilla, contrato o certificado de trabajo</th>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
        </tr>
        <tr>
            <th style="background-color: rgba(169, 169, 169, 0.76)">Plazo en Meses</th>
            <td class="text-right">{{ $meses }}</td>
            <th class="th-font">Factura de Luz</th>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            
        </tr>
        <tr>
            <th style="background-color: rgba(169, 169, 169, 0.76)">Cuota Mensual</th>
            <td class="text-right" >{{ number_format($pagoMensual, 2) }}</td>
            <th class="th-font" style="width: 40mm;">NIT, Licencia de funcionamiento</th>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
            <td>
                <div class="cuadrado"></div>
            </td>
        </tr>
        <tr>
            <th style="background-color: rgba(6, 138, 28, 0.76)">Total del Crédito</th>
            <td class="text-right">{{ $totalCredito }}</td>
            <th class="th-font">Documentos de domicilio propio</th>
            <td style="width: 25px;"><div class="cuadrado"></div></td>
            <td style="width: 25px;"><div class="cuadrado"></div></td>
            <td style="width: 25px;"><div class="cuadrado"></div></td>
        </tr>

    </table>
    <div class="footer">
        <p>Esta proforma es válida por {{ $validity }} horas desde su fecha de emisión.</p>
        <p>{{ $company_name }} &copy; {{ date('Y') }}</p>
    </div>
</body>

</html>
