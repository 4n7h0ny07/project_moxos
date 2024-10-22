<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Crédito</title>
    <style>
        @page {
            margin-top: 5mm;
            margin-bottom: 5mm;
            margin-left: 20mm;
            margin-right: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .menu {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            /* Color de fondo del menú */
            padding: 10px;
            color: #fff;
        }

        .menu img {
            margin-right: 20px;
        }

        /* Nombre de la empresa */
        .menu .company-name {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }

        /* Enlace de administración/login */
        .menu .admin-link {
            margin-right: 20px;
        }

        .menu .admin-link a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #444;
        }

        .menu .admin-link a:hover {
            background-color: #555;
        }

        /* Estilo para la lista del menú */
        .menu ul {
            list-style-type: none;
            /* Elimina los puntos de las listas */
            margin: 0;
            padding: 0;
            display: flex;
            /* Alinea los elementos en fila */
        }

        .menu ul li {
            margin-left: 15px;
            /* Espacio entre los elementos del menú */
        }

        .menu ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #444;
            /* Color de fondo de los enlaces */
            transition: background-color 0.3s ease;
            /* Transición suave en hover */
        }

        .menu ul li a:hover {
            background-color: #555;
            /* Cambio de color al pasar el ratón */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff4c4c;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e33e3e;
        }

        .results {
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .results h2 {
            margin-top: 0;
            color: #ff4c4c;
        }

        .results p {
            font-size: 18px;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            button {
                font-size: 14px;
            }

            .results p {
                font-size: 16px;
            }
        }

        .text-center {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            text-align: center;
            color: #e33e3e;
        }

        /* Estilos del footer */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Estilos para el mensaje de error */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            position: relative;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        .alert-danger ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .alert-danger li {
            margin: 5px 0;
        }

        /* Icono de error */
        .alert-danger::before {
            content: "\26A0";
            /* Símbolo de advertencia ⚠ */
            font-size: 20px;
            color: #a94442;
            margin-right: 10px;
            display: inline-block;
            vertical-align: middle;
        }

        /* Botón para cerrar el mensaje de error */
        .alert .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: #a94442;
            text-decoration: none;
            font-size: 18px;
        }

        .alert .close:hover {
            color: #843534;
        }

        .pdf-container {
            width: 100%;
            height: 600px;
            border: 1px solid #ccc;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <!-- Menú con logo, nombre de empresa y login -->
    <header class="menu">
        <img src="{{ url(setting('calculadora.logo_image')) }}" width="100px" alt="Logo Empresa">
        <div class="company-name">{{ setting('admin.title') }}</div>
        <div class="admin-link">
            {{-- @auth
                <a href="{{ route('voyager.dashboard') }}">Ir a la Administración</a>
            @else
                <a href="{{ route('voyager.login') }}">Login</a>
            @endauth --}}

            @php
                $menuItems = Voyager::model('Menu')->where('name', 'site')->first()->items;
            @endphp

            <ul>
                @if ($menuItems->count() > 0)
                    @foreach ($menuItems as $item)
                        <li>
                            <a href="{{ $item->url }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                @else
                    <li>No hay elementos en el menú.</li>
                @endif
            </ul>
        </div>
    </header>
    <div class="container">
        <h1>Calculadora de Crédito</h1>
        <!-- Mostrar mensaje de error si existe -->
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        <hr>
        <form action="{{ route('calcular.credito.post') }}" method="POST">
            @csrf
            <label for="tipo_credito">Motos :</label>
            <select name="tipo_credito" required>
                <option value="serna" {{ old('tipoCredito', $tipoCredito ?? '') == 'serna' ? 'selected' : '' }}>Motos
                    Serna, Keeway y Kymco ({{ setting('calculadora.motos_serna') }} %)</option>
                <option value="bicicletas"
                    {{ old('tipoCredito', $tipoCredito ?? '') == 'bicicletas' ? 'selected' : '' }}>Bicicletas
                    ({{ setting('calculadora.bicicletas_bike') }} %)</option>
                <option value="gama_media"
                    {{ old('tipoCredito', $tipoCredito ?? '') == 'gama_media' ? 'selected' : '' }}>Motos Benelli Gama
                    Media ({{ setting('calculadora.motos_media_benelli') }} %)</option>
                <option value="benelli" {{ old('tipoCredito', $tipoCredito ?? '') == 'benelli' ? 'selected' : '' }}>
                    Motos Benelli ({{ setting('calculadora.motos_benelli') }} %)</option>
                <option value="electrodomesticos_muebles"
                    {{ old('tipoCredito', $tipoCredito ?? '') == 'electrodomesticos_muebles' ? 'selected' : '' }}>
                    Crédito a Electrodomésticos y Muebles ({{ setting('calculadora.electrodomesticos') }} %)</option>
            </select>
            <label for="precio_contado">Precio Contado:</label>
            <input type="number" name="precio_contado" value="{{ old('precioContado', $precioContado ?? '') }}"
                required>

            <label for="cuota_inicial">Cuota Inicial:</label>
            <input type="number" name="cuota_inicial" value="{{ old('cuotaInicial', $cuotaInicial ?? '') }}" required>

            <label for="meses">Meses Plazos:</label>
            <input type="number" name="meses" value="{{ old('meses', $meses ?? '') }}" required>



            <button type="submit">Calcular</button>
        </form>

        @if (isset($pagoMensual) && isset($totalCredito))
            <div class="results">
                <h2>Resultados:</h2>
                <p><strong>Pago Mensual:</strong> {{ $pagoMensual }} Bs.</p>
                <p><strong>Total del Crédito:</strong> {{ $totalCredito }} Bs.</p>
            </div>
        @endif
    </div>
    {{-- <!-- Contenedor del PDF -->
    <div class="pdf-container">
        <iframe id="pdf" style="width:100%; height:100%;" frameborder="0"></iframe>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#credit-form').on('submit', function(e) {
            e.preventDefault();

            // Recoge los datos del formulario
            var tipo_credito = $('[name="tipo_credito"]').val();
            var precio_contado = $('#precio_contado').val();
            var cuota_inicial = $('#cuota_inicial').val();
            var meses = $('#meses').val();

            // Realiza una petición AJAX al servidor para generar el PDF
            $.ajax({
                url: '{{ route('calcular.credito.post') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    tipo_credito: tipo_credito,
                    precio_contado: precio_contado,
                    cuota_inicial: cuota_inicial,
                    meses: meses
                },
                success: function(response) {
                    // Verifica si la respuesta contiene la URL del PDF
                    if (response.pdf_url) {
                        // Asigna la URL al iframe para mostrar el PDF
                        $('#pdf').attr('src', response.pdf_url);
                    } else {
                        console.error('No se ha recibido una URL válida para el PDF.');
                    }
                },
                error: function(xhr) {
                    console.error('Error en la solicitud:', xhr.responseText);
                }
            });
        });
    </script> --}}

    <!-- Footer con derechos reservados -->
    <footer>
        &copy; {{ date('Y') }} Moxos Import Export. Todos los derechos reservados.
    </footer>
</body>

</html>
