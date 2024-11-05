@extends('voyager::master')

@section('page_titlle', 'Viendo Asistencias')

@section('page_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h1>
                    <i class="voyager-milestone"></i> Registros de Asistencia para el Dispositivo: {{ $device->name_device}}
                </h1>
                <p> {{ $name.' - '.$serial }}</p>
            </div>
            <!-- Selección de Cobrador -->
            {{-- <div class="form-group col-md-3">
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
            </div> --}}
        </div>
    </div>
@stop
@section('content')


    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>UID</th>
                <th>ID de Empleado</th>
                <th>Estado</th>
                <th>Fecha y Hora</th>
                <th>Dispositivo</th>
                <th>Serial</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendance as $record)
                <tr>
                    <td>{{ $record['state'] }}</td>
                    <td>{{ $record['id'] }}</td>
                    <td>{{ $record['timestamp'] }}</td>
                    <td>{{ $record['late_minutes'] }} minutos de retraso</td>
                    <td>{{ $record['type']}}</td>
                    <td>{{ $serial }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
