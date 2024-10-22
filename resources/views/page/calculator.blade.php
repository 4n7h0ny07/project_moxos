@extends('page.layouts.master')

@section('page_title', 'Motos | ' . setting('site.title'))

@section('content')
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">@yield(setting('site.title'))</h1>
            </a>

            <nav id="navmenu" class="navmenu">
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
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a>  --}}

        </div>
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Detalles del Producto</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Inicio</a></li>
                        <li class="current"><a href="{{ route('motorcycle') }}">Motocicletas</a></li>
                        <li class="current">Calculadora</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq section">
                            <h4>Instrucciones</h4>
                            <div class="faq-container">
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h6>Motos Serna, Keeway y Kymco?</h6>
                                    <div class="faq-content">
                                        <p>Para calcular debes igresar un monto no mayor a 3000 $us y el pazo mensual no
                                            mayor a 18 Meses, caso contrario no le permitira hacer el calculo</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h6>Bicicletas?</h6>
                                    <div class="faq-content">
                                        <p>Para calcular debes igresar un monto no mayor a 1500 $us y el pazo mensual no
                                            mayor a 10 Meses, caso contrario no le permitira hacer el calculo</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h6>Motos Benelli de gama media?</h6>
                                    <div class="faq-content">
                                        <p>Para calcular debes igresar un monto entre 3001 a 5999.99 $us y el pazo mensual
                                            no mayor a 24 Meses, caso contrario no le permitira hacer el calculo</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h6>Motos Benelli Gama alta?</h6>
                                    <div class="faq-content">
                                        <p>Para calcular debes igresar un monto mayor a 6000 $us y el pazo mensual no mayor
                                            a 24 Meses, caso contrario no le permitira hacer el calculo</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                    {{-- <i class="faq-icon bi bi-question-circle"></i> --}}
                                    <h6>Electrodomesticos y Muebles?</h6>
                                    <div class="faq-content">
                                        <p>el calculo de los electrodomesticos es ingresar el precio e ingresar el palzo
                                            mensual, si el plazo maneusal supera los 8 meses se le calculara con un interes
                                            adicional <br>el pazo mensual no debe mayor a 24 Meses, caso contrario no le
                                            permitira hacer el calculo</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                            </div>
                        </div><!-- End Services List -->

                        {{-- <div class="service-box">
                            <h4>Chatear con un </h4>
                            {{-- <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                             <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a> -}}
                        </div> -}}
                    </div><!-- End Services List --> --}}

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Tienes dudas contactanos?</h4>
                            {{-- href="https://wa.me/{{ $item->user->phone ? '591'.$item->user->phone : setting('social.whatsapp') ?? '59175199157' }}?text={{ url('details/'.$item->slug) }} Vi%20esto%20en%20tu%20sitio%20web" --}}
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span><a
                                        href="http://wa.me/591{{ setting('site-social.phone') ?? '65203074' }}?text=Vi%20esto%20en%20tu%20sitio%20web"
                                        target="_blank" rel="noopener noreferrer">
                                        591{{ setting('site-social.phone') ?? '65203074' }}</a></span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:info@moxos.com.bo">Moxos Informaciones</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">

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
                                <select class="form-control" name="tipo_credito" required>
                                    <option value="serna"
                                        {{ old('tipoCredito', $tipoCredito ?? '') == 'serna' ? 'selected' : '' }}>Motos
                                        Serna, Keeway y Kymco ({{ setting('calculadora.motos_serna') }} %)</option>
                                    <option value="bicicletas"
                                        {{ old('tipoCredito', $tipoCredito ?? '') == 'bicicletas' ? 'selected' : '' }}>
                                        Bicicletas
                                        ({{ setting('calculadora.bicicletas_bike') }} %)</option>
                                    <option value="gama_media"
                                        {{ old('tipoCredito', $tipoCredito ?? '') == 'gama_media' ? 'selected' : '' }}>
                                        Motos
                                        Benelli Gama
                                        Media ({{ setting('calculadora.motos_media_benelli') }} %)</option>
                                    <option value="benelli"
                                        {{ old('tipoCredito', $tipoCredito ?? '') == 'benelli' ? 'selected' : '' }}>
                                        Motos Benelli ({{ setting('calculadora.motos_benelli') }} %)</option>
                                    <option value="electrodomesticos_muebles"
                                        {{ old('tipoCredito', $tipoCredito ?? '') == 'electrodomesticos_muebles' ? 'selected' : '' }}>
                                        Crédito a Electrodomésticos y Muebles
                                        ({{ setting('calculadora.electrodomesticos') }}
                                        %)</option>
                                </select>
                                <label for="precio_contado">Precio Contado:</label>
                                <input class="form-control" type="number" name="precio_contado"
                                    value="{{ old('precioContado', $precioContado ?? '') }}" required>

                                <label for="cuota_inicial">Cuota Inicial:</label>
                                <input class="form-control" type="number" name="cuota_inicial"
                                    value="{{ old('cuotaInicial', $cuotaInicial ?? '') }}" required>

                                <label for="meses">Meses Plazos:</label>
                                <input class="form-control" type="number" name="meses"
                                    value="{{ old('meses', $meses ?? '') }}" required>

                                <br>
                                @if (filter_var(setting('printer-page.pdf'), FILTER_VALIDATE_BOOLEAN))
                                    <button class="btn btn-warning btn-block" type="submit">Calcular e Imprimir
                                        PDF</button>
                                @else
                                    <button class="btn btn-success btn-block" type="submit">Calcular</button>
                                @endif
                            </form>

                            @if (isset($pagoMensual) && isset($totalCredito))
                                <div class="results">
                                    <h2>Resultados:</h2>
                                    <p><strong>Pago Mensual:</strong> {{ $pagoMensual }} Bs.</p>
                                    <p><strong>Total del Crédito:</strong> {{ $totalCredito }} Bs.</p>
                                </div>
                            @endif
                        </div>

                        {{-- <div class="container">
                            <div id="chatBox">
                                <h2>Chat de WhatsApp</h2>
                                <div id="messages"></div>
                                <form id="chatForm">
                                    <input class="form-control" type="text" id="number"
                                        placeholder="Número (Ej: 591XXXXXXXX)" required>
                                    <input class="form-control" type="text" id="message"
                                        placeholder="Escribe tu mensaje..." required>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </form>
                            </div>
                        </div> --}}

                    </div>

                </div>

                {{-- </div> --}}

        </section><!-- /Service Details Section -->
    </main>
    {{-- <script>
        const qrServerUrl = "http://localhost:3001"; // URL del servidor Node.js

        // Verificar si ya estás autenticado
        function checkAuthentication() {
            fetch(`${qrServerUrl}/get-qr`)
                .then(response => response.json())
                .then(data => {
                    if (data.authenticated) {
                        document.getElementById('messages').innerHTML +=
                            '<p>Ya estás autenticado. Puedes enviar mensajes.</p>';
                    } else if (data.qr) {
                        document.getElementById('messages').innerHTML +=
                            '<p>Escanea el código QR para iniciar sesión:</p>';
                        const img = document.createElement('img');
                        img.src = data.qr;
                        document.getElementById('messages').appendChild(img);
                    } else {
                        document.getElementById('messages').innerHTML += `<p>${data.message}</p>`;
                    }
                })
                .catch(error => {
                    console.error('Error al verificar la autenticación:', error);
                });
        }

        // Llamar a la función para verificar la autenticación cuando se cargue la página
        window.onload = checkAuthentication;

        // // Enviar mensajes
        document.getElementById('chatForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const number = document.getElementById('number').value;
            const message = document.getElementById('message').value;

            fetch(`${qrServerUrl}/send-message`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        number,
                        message
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('messages').innerHTML +=
                            `<p>Mensaje enviado a ${number}: ${message}</p>`;
                    } else {
                        document.getElementById('messages').innerHTML +=
                            `<p>Error al enviar mensaje: ${data.error || data.message}</p>`;
                    }
                })
                .catch(error => {
                    console.error('Error al enviar el mensaje:', error);
                });

            // Limpiar el formulario
            document.getElementById('message').value = '';
        });

        // function sendMessage() {
        //     const number = document.getElementById('number')
        //     .value; // Suponiendo que tienes un campo de entrada con id 'number'
        //     const message = document.getElementById('message')
        //     .value; // Suponiendo que tienes un campo de entrada con id 'message'

        //     fetch(`${qrServerUrl}/send-message`, {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //             },
        //             body: JSON.stringify({
        //                 number,
        //                 message
        //             }),
        //         })
        //         .then(response => {
        //             if (!response.ok) {
        //                 throw new Error('Network response was not ok ' + response.statusText);
        //             }
        //             return response.json();
        //         })
        //         .then(data => {
        //             console.log(data.message); // Mostrar mensaje de éxito
        //         })
        //         .catch(error => {
        //             console.error('Error al enviar el mensaje:', error);
        //         });
        // }

        // // Llama a esta función en el evento de un botón o similar
        // document.getElementById('sendButton').addEventListener('click', sendMessage);
    </script> --}}
