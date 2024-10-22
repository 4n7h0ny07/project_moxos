<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de Importación de Motos y Muebles</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Estilos Generales */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            /* Fondo gris claro */
            color: #333;
            /* Texto gris oscuro */
        }

        h1,
        h2,
        h3 {
            color: #e60000;
            /* Rojo vivo para encabezados */
            margin: 20px 0;
        }

        p {
            color: #666;
            /* Texto gris medio */
        }

        a {
            text-decoration: none;
            color: #e60000;
            /* Rojo para enlaces */
            transition: color 0.3s;
        }

        a:hover {
            color: #000;
            /* Negro al pasar el cursor */
        }

        /* Estilos del Header */
        header {
            background-color: #333;
            /* Fondo gris oscuro */
            color: white;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
        }

        header .logo img {
            height: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            font-weight: bold;
        }

        header .btn {
            background-color: #e60000;
            /* Rojo */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        header .btn:hover {
            background-color: #b30000;
            /* Rojo más oscuro */
        }

        /* Sección Hero */
        .hero {
            background-color: white;
            /* Fondo blanco */
            color: #333;
            padding: 100px 50px;
            text-align: center;
            background-image: url('hero-background.jpg');
            /* Imagen de fondo (opcional) */
            background-size: cover;
            background-position: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .hero .btn {
            background-color: #e60000;
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .hero .btn:hover {
            background-color: #b30000;
        }

        /* Sección de Categorías */
        .categorias {
            padding: 50px;
            background-color: white;
            text-align: center;
        }

        .categorias h2 {
            margin-bottom: 40px;
            font-size: 36px;
        }

        .grid-categorias {
            display: flex;
            justify-content: space-around;
        }

        .grid-categorias .categoria {
            width: 30%;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .grid-categorias .categoria img {
            width: 100%;
            border-radius: 10px;
        }

        .grid-categorias .categoria h3 {
            margin-top: 20px;
            font-size: 24px;
        }

        .grid-categorias .categoria:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Sección de Productos Destacados */
        .productos-destacados {
            padding: 50px;
            background-color: white;
            text-align: center;
        }

        .productos-destacados h2 {
            margin-bottom: 40px;
            font-size: 36px;
        }

        .productos-carousel {
            display: flex;
            overflow-x: scroll;
        }

        .productos-carousel div {
            width: 200px;
            margin-right: 20px;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .productos-carousel div:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .productos-carousel img {
            width: 100%;
            border-radius: 10px;
        }

        /* Sección del Equipo */
        .equipo {
            padding: 50px;
            background-color: #f5f5f5;
            text-align: center;
        }

        .equipo h2 {
            margin-bottom: 40px;
            font-size: 36px;
        }

        .grid-equipo {
            display: flex;
            justify-content: space-around;
        }

        .grid-equipo .miembro {
            width: 30%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .grid-equipo .miembro img {
            width: 100%;
            border-radius: 10px;
        }

        .grid-equipo .miembro:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Sección de Ubicación (Google Maps) */
        .ubicacion {
            padding: 50px;
            background-color: white;
            text-align: center;
        }

        .ubicacion h2 {
            margin-bottom: 40px;
            font-size: 36px;
        }

        .mapa {
            width: 100%;
            height: 400px;
            background-color: #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #e60000;
        }

        footer a:hover {
            color: white;
        }
    </style>
</head>

<body>

    <!-- Encabezado -->
    <header>
        <div class="logo"> <img src="{{ url(setting('calculadora.logo_image')) }}" width="100px" alt="Logo Empresa"> </div>
        <div class="company-name">{{ setting('admin.title') }}</div>
        <nav>
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
        </nav>
        <a href="#" class="btn">Contáctanos</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h1>Tu lugar para motos, muebles y más</h1>
        <p>Encuentra todo lo que necesitas en un solo lugar</p>
        <a href="#" class="btn">Ver Catálogo</a>
    </section>

    <!-- Categorías -->
    <section class="categorias">
        <h2>Nuestras Categorías</h2>
        <div class="grid-categorias">
            <div class="categoria">
                <img src="motos.jpg" alt="Motos">
                <h3>Motos</h3>
            </div>
            <div class="categoria">
                <img src="muebles.jpg" alt="Muebles">
                <h3>Muebles</h3>
            </div>
            <div class="categoria">
                <img src="repuestos.jpg" alt="Repuestos">
                <h3>Repuestos</h3>
            </div>
        </div>
    </section>

    <!-- Productos destacados -->
    <section class="productos-destacados">
        <h2>Productos más Vendidos</h2>
        <div class="productos-carousel">
            <!-- Aquí iría el contenido del carrusel de productos -->
        </div>
    </section>

    <!-- Equipo -->
    <section class="equipo">
        <h2>Nuestro Equipo</h2>
        <div class="grid-equipo">
            <div class="miembro">
                <img src="equipo1.jpg" alt="Miembro del Equipo">
                <h3>Nombre</h3>
                <p>Cargo</p>
            </div>
            <!-- Más miembros -->
        </div>
    </section>

    <!-- Ubicación -->
    <section class="ubicacion">
        <h2>Encuéntranos</h2>
        <div class="mapa">
            <!-- Incluir Google Maps embebido -->
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 Empresa de Importación. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
