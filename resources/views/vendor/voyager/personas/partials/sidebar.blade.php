<div class="panel panel-bordered">

    @php
        $campos = [
            'image',
            'code',
            'names',
            'apaterno',
            'amaterno',
            'fecha_nacimiento',
            'numero_carnet',
            'complemento',
            'expedito',
            'estado_civil',
            'numero_celular',
            'numero_telefono',
            'email',
            'direccion',
            'email_work',
            'cargo_work',
            'salario_work',
        ];

        $total = count($campos);
        $completados = 0;

        foreach ($campos as $campo) {
            if (!empty($dataTypeContent->$campo)) {
                $completados++;
            }
        }

        $porcentaje = round(($completados / $total) * 100);

        if ($porcentaje < 40) {
            $color = 'danger';
        } elseif ($porcentaje < 70) {
            $color = 'warning';
        } else {
            $color = 'success';
        }
    @endphp

    <div class="panel-body text-center">
        <img src="{{ $dataTypeContent->image ? Voyager::image($dataTypeContent->image) : asset('storage/personas/default.png') }}"
            class="img-circle" width="180">

        <h3>
            {{ $dataTypeContent->names }}
            {{ $dataTypeContent->apaterno }}
            {{ $dataTypeContent->amaterno }}
        </h3>
        <hr>
        <p>
            <strong>Código</strong>
            <br>
            {{ $dataTypeContent->code }}
        </p>
        <p>
            <strong>Celular</strong>
            <br>
            {{ $dataTypeContent->numero_celular }}
        </p>
        <p>
            <strong>Email</strong>
            <br>
            {{ $dataTypeContent->email }}
        </p>
        <p>
            <strong>Estado Civil</strong>
            <br>
            {{ $dataTypeContent->estado_civil }}
        </p>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-{{ $color }}" role="progressbar" style="width: {{ $porcentaje }}%">
            {{ $porcentaje }}%
        </div>
    </div>

    <small>
        {{ $completados }} de {{ $total }} campos completados
    </small>

</div>
