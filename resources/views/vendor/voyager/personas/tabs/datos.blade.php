<table class="table table-bordered">

    <tr>
        <th>Nombre</th>
        <td>
            {{ $dataTypeContent->names }}
            {{ $dataTypeContent->apaterno }}
            {{ $dataTypeContent->amaterno }}
        </td>
    </tr>
    <tr>
        <th>Carnet</th>
        <td>
            {{ $dataTypeContent->numero_carnet }}
        </td>
    </tr>
    <tr>
        <th>Complemento</th>
        <td>
            {{ $dataTypeContent->complemento }}
        </td>
    </tr>
    <tr>
        <th>Expedido</th>
        <td>
            {{ $dataTypeContent->expedito }}
        </td>
    </tr>
    <tr>
        <th>Fecha Nacimiento</th>
        <td>
            {{ $dataTypeContent->fecha_nacimiento }}
        </td>
    </tr>
    <tr>
        <th>Dirección</th>
        <td>
            {{ $dataTypeContent->direccion }}
        </td>
    </tr>
    <tr>
        <th>Teléfono</th>
        <td>
            {{ $dataTypeContent->numero_telefono }}
        </td>
    </tr>
</table>
