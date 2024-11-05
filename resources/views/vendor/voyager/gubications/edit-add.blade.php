@extends('voyager::master')

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.gubications.update', $dataTypeContent->id) }}@else{{ route('voyager.gubications.store') }}@endif" method="POST" enctype="multipart/form-data">
                    @if(isset($dataTypeContent->id))
                        {{ method_field("PUT") }}
                    @endif
                    {{ csrf_field() }}

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Información de la Ubicación</h3>
                        </div>
                        <div class="panel-body">
                             {{-- <!-- Campo Grupo -->
                             <div class="form-group col-md-4">
                                <label for="name">Grupo</label>
                                <input type="text select-2" name="grupo_id" class="form-control" value="{{ $dataTypeContent->grupos_id ?? '' }}">
                            </div> --}}
                            <!-- Selección de Persona -->
                            <!-- Campo Grupo -->
                            <div class="form-group col-md-4">
                                <label for="grupos_id">Grupo</label>
                                <select name="grupos_id" class="form-control">
                                    @foreach(App\Models\Grupos::all() as $grupo)
                                        <option value="{{ $grupo->id }}" @if(isset($dataTypeContent->grupos_id) && $dataTypeContent->grupos_id == $grupo->id) selected @endif>
                                            {{ $grupo->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Campo Nombre -->
                            <div class="form-group col-md-4">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{ $dataTypeContent->name ?? '' }}">
                            </div>

                            <!-- Campo Ciudad -->
                            {{-- <div class="form-group col-md-3">
                                <label for="ciudad">Ciudad</label>
                                <input type="hidden" name="ciudad" id="ciudad" class="form-control" value="{{ $dataTypeContent->ciudad ?? '' }}">
                            </div> --}}
                            <!-- Campo Dirección -->
                            <div class="form-group col-md-4">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $dataTypeContent->direccion ?? '' }}">
                            </div>

                            <!-- Otros campos adicionales -->
                            <div class="form-group">
                                <label for="details">Detalles</label>
                                <textarea name="details" class="form-control">{{ $dataTypeContent->details ?? '' }}</textarea>
                            </div>

                            <!-- Mapa Leaflet para seleccionar latitud y longitud -->
                            <div class="form-group">
                                <label for="map">Selecciona la ubicación en el mapa</label>
                                <div id="map" style="height: 600px;"></div>
                                <input type="hidden" id="latitude" name="latitude" value="{{ $dataTypeContent->latitude ?? '' }}">
                                <input type="hidden" id="longitude" name="longitude" value="{{ $dataTypeContent->longitude ?? '' }}">
                                <input type="hidden" name="ciudad" id="ciudad" class="form-control" value="{{ $dataTypeContent->ciudad ?? '' }}">
                            </div>

                            
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Agregar Leaflet.js y configurar el mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        var map = L.map('map').setView([{{ $dataTypeContent->latitude ??  -14.835093239559956 }}, {{ $dataTypeContent->longitude ?? -64.90409039080704 }}], 13);
        
        // Añadir capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Añadir marcador en la posición inicial
        var marker = L.marker([{{ $dataTypeContent->latitude ??  -14.835093239559956 }}, {{ $dataTypeContent->longitude ?? -64.90409039080704 }}], {
            draggable: true
        }).addTo(map);

        // Función para realizar la geocodificación inversa
        function reverseGeocode(lat, lon) {
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lon}&format=json`)
                .then(response => response.json())
                .then(data => {
                    if (data.address) {
                        document.getElementById('ciudad').value = data.address.city || data.address.town || data.address.village || '';
                        document.getElementById('direccion').value = data.display_name || '';
                    }
                })
                .catch(error => console.log('Error en la geocodificación inversa:', error));
        }

        // Actualizar coordenadas al mover el marcador
        function onMapClick(e) {
            marker.setLatLng(e.latlng);
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;

            // Llamar a la función de geocodificación inversa
            reverseGeocode(e.latlng.lat, e.latlng.lng);
        }

        // Escuchar evento de clic en el mapa
        map.on('click', onMapClick);

        // Actualizar coordenadas al arrastrar el marcador
        marker.on('dragend', function (e) {
            var position = marker.getLatLng();
            document.getElementById('latitude').value = position.lat;
            document.getElementById('longitude').value = position.lng;

            // Llamar a la función de geocodificación inversa
            reverseGeocode(position.lat, position.lng);
        });
    </script>
@endsection