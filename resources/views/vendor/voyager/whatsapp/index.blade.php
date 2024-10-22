@extends('voyager::master')
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #221f1e;
        }

        /* Estilo del contenedor principal */
        .container {
            display: flex;
            height: 85vh;
            max-width: 100%;
            margin: 0 auto;
            box-shadow: 0 2px 25px rgba(0, 0, 0, 0.1);
            background-color: #8CC53F;
            /* background-color del fondo de la aplicaion*/
            border-radius: 10px;
            overflow: hidden;
        }

        /* Estilo del panel de contactos */
        .contacts-panel {
            width: 30%;
            background-color: #f8f9fa;
            border-right: 1px solid #dfe5ec;
            overflow-y: auto;
        }

        .header {
            background-color: #202C33;
            color: white;
            padding: 15px;
            text-align: center;
            position: sticky;
            font-size: 1.2rem;
            font-weight: bold;
            top: 0;
            /* Hace que el header sea estático */
            z-index: 1;
        }

        .header input {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border-radius: 5px;
            color: #111B21;
            border: none;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact {
            padding: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #dfe5ec;
            transition: background-color 0.2s;
        }

        .contact:hover {
            background-color: #e0e0e0;
        }

        .contact img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
        }

        .contact-name {
            font-weight: bold;
        }

        .contact-last-message {
            font-size: 0.9rem;
            color: #888;
        }

        /* Estilo del área de chat */
        .chat-area {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            background-color: #202C33;
            color: white;
            padding: 15px;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .chat-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #111B21;
        }

        .message {
            max-width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            font-size: 0.9rem;
        }

        .message.sent {
            background-color: #005C4B;
            margin-left: auto;
            text-align: left;
            color: #e0e0e0;
            font-size: 12pt;
            width: 45%;


        }

        .received {
            background-color: #202C33;
            font-size: 13pt;
            color: #ffffff;
            border-left: 20px 20px 20px 0;
            width: 45%;
            margin-right: auto;
            border-radius: 10px;
        }

        .message.received {
            background-color: #202C33;
            margin-right: auto;
            text-align: right;
            color: #e0e0e0;
            font-size: 12pt;
            width: 45%;
        }

        .message:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .message.sent:before {
            border-width: 20px 0 20px 20px;
            border-color: transparent transparent transparent #005C4B;
            top: 0;
            right: -10px;

        }

        .message.received:before {
            border-width: 20px 20px 20px 0;
            border-color: transparent #202C33 transparent transparent;
            top: 0;
            left: -10px;
        }

        .message-time {
            font-size: 12px;
            color: #888;
            display: block;
            text-align: right;
        }

        .media {
            margin-top: 5px;
        }

        .media img,
        .media video,
        .media audio {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Estilo del área de entrada de mensajes */
        .input-area {
            padding: 10px;
            background-color: #202C33;
            border-top: 1px solid #dfe5ec;
            display: flex;
        }

        .input-area input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .input-area button {
            background-color: #25D366;
            border: none;
            color: white;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-area button:hover {
            background-color: #128C7E;
        }

        /* Estilo del QR */
        .qr-container,
        .text-container {
            width: 50%;
            float: left;
            /* Flotar los divs a la izquierda */
            /* margin-right: 2%; Espacio entre los divs */
            justify-content: center;
            align-items: center;
            background-color: #fffcfc00;
            text-align: center !important;
            /* border-bottom: 1px solid #dfe5ec; */
            padding: 5%;
            color: rgb(255, 255, 255);
            margin-top: 175px;
            /*    margin-left: 350px; */

            /* width: 225px;
                                        height: 225px; */
        }

        .text-container {
            margin-right: 0;
            /* El último div no necesita margen derecho */
        }

        #qr-code {
            width: 200px;
            height: 200px;
        }

        .reply-box {
            background-color: #f0f0f0;
            padding: 10px;
            border-left: 3px solid #007bff;
            margin-bottom: 10px;
        }

        .reply-box p {
            margin: 0;
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <br>
    <div class="container">
        <!-- Panel de Contactos -->
        <div class="contacts-panel">
            <div class="header">
                WhatsApp {{ setting('site.title') }}
                <input type="text" id="contact-search" placeholder="Buscar contacto..." onkeyup="searchContact()">
            </div>
            <ul class="contact-list">
                <!-- Contactos se cargarán dinámicamente aquí -->
            </ul>
        </div>

        <!-- Área de chat -->
        <div class="chat-area">
            <div class="chat-header">
                <img src="{{ setting('admin.icon_image') }}" alt=" "> 

                <span>Selecciona un Mensaje para Responder</span>
            </div>
            <div class="chat-messages" id="messages">
                <div class="text-container" id="qr-container-text"><br><br><br>
                    <h3>Usa WhatsApp en el Sistema</h3>
                    <li style="text-align: justify; font-size:9pt; ">Abre WhatsApp en tu telefono.</li>
                    <li style="text-align: justify; font-size:9pt; ">Toca el menu <i class="voyager-settings"></i> en
                        Android, o <i class="voyager-helm"></i> en Iphone.</li>
                    <li style="text-align: justify; font-size:9pt; ">Toca Dispositivos vinculados y, luego vincular
                        dispositivo.</li>
                    <li style="text-align: justify; font-size:9pt; ">Apunta tu telefono hacia la pantalla para escanear el
                        codigo QR.</li>
                </div>
                <div class="qr-container" id="qr-container">
                    <img id="qr-image" src="" alt="Esperando el Codigo Qr....." />
                    <p style="font-size: 13pt; text-align:center !importtant;">Escanea el codigo QR.</p>
                </div>
                <!-- Mensajes dinámicos -->
            </div>
            <!-- Área para mostrar el mensaje seleccionado -->
            <div class="reply-box" id="reply-box" style="display:none;">
                <p>Respondiendo a: <span id="selected-message"></span></p>
            </div>
            <div class="input-area">
                <input type="text" id="message-input" placeholder="Escribe un mensaje...">
                <button id="send-button">➤</button>
            </div>
        </div>
    </div>
@endsection



@section('javascript')
    {{-- <script src="http://181.115.184.92/wppmoxos/socket.io/socket.io.js"></script> --}}
    <script src="https://cdn.socket.io/4.0.0/socket.io.min.js"></script> 
    <script src="{{ asset('js/whatsapp.js') }}"></script>
    <script>
        // Función para buscar contactos
        function searchContact() {
            let input = document.getElementById('contact-search').value.toLowerCase();
            let contacts = document.getElementsByClassName('contact');

            for (let i = 0; i < contacts.length; i++) {
                let contactName = contacts[i].getElementsByTagName('span')[0].innerText.toLowerCase();
                if (contactName.includes(input)) {
                    contacts[i].style.display = 'block';
                } else {
                    contacts[i].style.display = 'none';
                }
            }
        }
        // Verificar si el cliente está autenticado y mostrar el código QR si no lo está
        function checkAuthentication() {
            setInterval(() => {
                fetch('http://181.115.184.92/wppmoxos/get-qr')
                    .then(response => response.json())
                    .then(data => {
                        if (data.authenticated) {
                            // El cliente ya está autenticado, cargar contactos
                            loadContacts();
                            document.getElementById('qr-container-text').style.display = 'none'; // Ocultar QR
                            document.getElementById('qr-container').style.display = 'none'; // Ocultar QR
                        } else if (data.qr) {
                            // Mostrar el QR
                            document.getElementById('qr-container').style.display = 'block';
                            document.getElementById('qr-container-text').style.display = 'block'; // Ocultar QR
                            document.getElementById('qr-image').src = data.qr;
                        } else {
                            console.log(data.message);
                        }
                    })
                    .catch(err => {
                        console.error('Error al verificar la autenticación:', err);
                    });
            }, 5000);

        }

        // Llamar la función al cargar la página
        window.onload = () => {
            checkAuthentication();
        };
    </script>
@endsection
