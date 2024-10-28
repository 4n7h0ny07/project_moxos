@extends('voyager::master')

@section('page_titlle', 'Viendo Importar')

@section('page_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h1>
                    <i class="voyager-milestone"></i> Ubicaciones de Clientes
                </h1>
            </div>
            <!-- Selección de Cobrador -->
            <div class="form-group col-md-3">
                <form method="GET" action="{{ route('coordenada.show') }}">
                    <br>
                    <select class="form-control select2" name="cobrador_id" id="cobrador_id" onchange="this.form.submit()" required>
                        <option value="" selected="selected">Seleccionar Cobrador</option>
                        @foreach ($cobradores as $cobrador)
                            <option value="{{ base64_encode($cobrador->id) }}" {{ $cobradorId == base64_encode($cobrador->id) ? 'selected' : '' }}>
                                {{ $cobrador->name }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <!-- Contenedor del mapa -->
                    <div id="map" style="width: 100%; height: 730px;"></div>

                </div>
            </div>
        </div>
    </div>

    <!-- Incluir Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <!-- Incluir Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

    <script>
    // Inicializar el mapa centrado en una ubicación genérica
    var map = L.map('map').setView([-14.831612, -64.908797], 13);

    // Agregar la capa de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Definir iconos personalizados para los marcadores
    var icons = {
        redIcon: L.icon({ iconUrl: '{{ asset('images/marker/red_marker.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
        purpleIcon: L.icon({ iconUrl: '{{ asset('images/marker/purple_marker.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
        greenIcon: L.icon({ iconUrl: '{{ asset('images/marker/green_marker.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
        yellowIcon: L.icon({ iconUrl: '{{ asset('images/marker/yellow_marker.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
        calipsoIcon: L.icon({ iconUrl: '{{ asset('images/marker/calipso_marker.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
        defaultIcon: L.icon({ iconUrl: '{{ asset('images/marker/default.png') }}', iconSize: [35, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] })
    };

    // Datos de las coordenadas pasadas desde el controlador
    var locations = @json($coordenadas);

    // Borrar los marcadores existentes
    function clearMarkers() {
        map.eachLayer(function(layer) {
            if (layer instanceof L.Marker) {
                map.removeLayer(layer);
            }
        });
    }

    // Cargar marcadores según las coordenadas filtradas
    function loadMarkers(coordenadas) {
        clearMarkers();
        coordenadas.forEach(function(location) {
            if (location.persona) {
                var lat = location.latitude;
                var lon = location.longitude;

                var markerIcon;
                switch (location.cobrador_id) {
                    case 2: markerIcon = icons.redIcon; break;
                    case 3: markerIcon = icons.purpleIcon; break;
                    case 4: markerIcon = icons.greenIcon; break;
                    case 5: markerIcon = icons.yellowIcon; break;
                    case 6: markerIcon = icons.calipsoIcon; break;
                    default: markerIcon = icons.defaultIcon;
                }

                // Crear y añadir marcador
                var marker = L.marker([lat, lon], { icon: markerIcon }).addTo(map);

                // Tooltip y popup con detalles
                marker.bindTooltip(
                    `<b>${location.persona.names} ${location.persona.apaterno} ${location.persona.amaterno}</b>`, 
                    { permanent: false, direction: 'right', offset: [0, -10] }
                );
                marker.bindPopup(
                    `<img src="{{ asset('storage/') }}/${location.persona.image}" alt="Foto" width="150px" height="auto"> <br>
                    <b>${location.persona.names} ${location.persona.apaterno} ${location.persona.amaterno}</b><br>
                    <a href="https://wa.me/${location.persona.numero_celular}" target="_blank">Contactarme</a><hr>
                    <a href="https://www.google.com/maps?q=${lat},${lon}" target="_blank">Ver Ubicación</a> - <span>${location.cobrador.name}</span>`
                );
            } else {
                console.warn("No se encontró una persona asociada con la coordenada:", location);
            }
        });
    }

    // Cargar los marcadores inicialmente
    loadMarkers(locations);
    </script>


@endsection
