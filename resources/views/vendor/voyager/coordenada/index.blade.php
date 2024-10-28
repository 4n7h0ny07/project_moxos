@extends('voyager::master')

@section('page_titlle', 'Viendo Importar')

@section('page_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h1>
                    <i class="voyager-location"></i> Cordenadas de Clientes
                </h1>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="map" style="height: 720px; width: 100%; margin-top: 20px;"></div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="container mt-6">
                                <h2>Registrar Coordenadas</h2>
                                <form method="POST" action="{{ route('coordenada.store') }}">
                                    @csrf
                                    <!-- Selección de Persona -->
                                    <div class="form-group ">
                                        <label for="persona_id">Seleccionar Persona:</label>
                                        <select id="persona_id" class="form-control select2" name="persona_id" required>
                                            @foreach ($personas as $persona)
                                                <option value="{{ $persona->id }}">
                                                    {{ $persona->names . ' ' . $persona->apaterno . ' ' . $persona->amaterno }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                   

                                    <!-- Selección de Cobrador -->
                                    <div class="form-group col-md-6">
                                        <label for="cobrador_id">Seleccionar Cobrador:</label>
                                        <select id="cobrador_id" class="form-control select2" name="cobrador_id" required>
                                            <option value="" selected="selected">
                                                Selecciona un cobrador</option>
                                            @foreach ($cobradores as $cobrador)
                                                <option value="{{ $cobrador->id }}">
                                                    {{ $cobrador->name . ' Code: ' . $cobrador->code }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                     <!-- Selección de Promotor -->
                                     <div class="form-group col-md-6">
                                        <label for="promotor_id">Seleccionar Promotor:</label>
                                        <select id="promotor_id" class="form-control select2" name="promotor_id" required>
                                            <option value="" selected="selected">
                                                Selecciona un Promotor</option>
                                            @foreach ($promotores as $promotor)
                                                <option value="{{ $promotor->id }}">
                                                    {{ $promotor->name . ' Code: ' . $promotor->code }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Latitud (oculta) -->
                                    <div class="form-group">
                                        {{-- <label for="latitude">Latitud:</label> --}}
                                        <input type="hidden" id="latitude" name="latitude" class="form-control"
                                            readonly="readonly">
                                    </div>

                                    <!-- Longitud (oculta) -->
                                    <div class="form-group">
                                        {{-- <label for="longitude">Longitud:</label> --}}
                                        <input type="hidden" id="longitude" name="longitude" class="form-control"
                                            readonly="readonly">
                                    </div>

                                    <!-- Detalles de la ubicación -->
                                    <div class="form-group">
                                        <label for="detail">Detalles de la ubicación:</label>
                                        <textarea name="detail" id="detail" class="form-control" rows="7"></textarea>
                                    </div>

                                    <!-- Botones de acción -->
                                    <button type="submit" class="btn btn-primary">Guardar Coordenadas</button>
                                    <a href="{{ route('coordenada.show') }}" class="text-success">Ver Registros</a>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Cargar Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS4zYzDsfaDx752kN_reWs7g1vSRdh6ww&callback=initMap" async
        defer></script>
        <script>
            let map;
            let marker;
        
            function initMap() {
                // Intentar obtener la ubicación actual
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        const myLatLng = { lat: lat, lng: lng };
        
                        // Crear el mapa centrado en la ubicación actual
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: myLatLng,
                            zoom: 15,
                            mapTypeId: 'hybrid',
                            mapTypeControl: true
                        });
        
                        // Actualizar inputs de latitud y longitud con la ubicación actual
                        updateLatLng(lat, lng);
        
                        // Escuchar clics en el mapa para mover o crear el marcador
                        map.addListener('click', function(event) {
                            placeMarker(event.latLng);
                        });
                    }, function() {
                        // Si no se puede obtener la ubicación actual, manejar el error
                        handleLocationError(true);
                    });
                } else {
                    // Si el navegador no soporta geolocalización
                    handleLocationError(false);
                }
            }
        
            function handleLocationError(browserHasGeolocation) {
                alert(browserHasGeolocation ?
                    "Error: El servicio de geolocalización falló." :
                    "Error: Tu navegador no soporta geolocalización.");
        
                // Ubicación predeterminada
                const defaultLatLng = { lat: -14.831507, lng: -64.908772 };
        
                // Crear el mapa centrado en la ubicación predeterminada
                map = new google.maps.Map(document.getElementById('map'), {
                    center: defaultLatLng,
                    zoom: 15,
                    mapTypeId: 'hybrid',  // Cambiar a modo satélite
                    mapTypeControl: true
                });
        
                // Escuchar clics en el mapa para mover o crear el marcador
                map.addListener('click', function(event) {
                    placeMarker(event.latLng);
                });
        
                // Asignar valores de la ubicación predeterminada a los inputs
                updateLatLng(defaultLatLng.lat, defaultLatLng.lng);
            }
        
            // Función para colocar el marcador en la ubicación especificada y actualizar los inputs
            function placeMarker(location) {
                // Si el marcador ya existe, moverlo a la nueva ubicación
                if (marker) {
                    marker.setPosition(location);
                } else {
                    // Crear el marcador si no existe
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        draggable: true
                    });
        
                    // Escuchar el evento de arrastre para actualizar las coordenadas
                    marker.addListener('dragend', function(event) {
                        updateLatLng(event.latLng.lat(), event.latLng.lng());
                    });
                }
        
                // Actualizar los inputs de latitud y longitud
                updateLatLng(location.lat(), location.lng());
            }
        
            // Función para actualizar latitud y longitud en los inputs
            function updateLatLng(lat, lng) {
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lng;
            }
        </script>
@endsection
