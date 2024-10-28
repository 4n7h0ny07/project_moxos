@extends('voyager::master')

@section('content')
@include('voyager::alerts')
    <div class="row">
        <div class="col-md-9">
            <di class="panel">
                <div class="page-content container-fluid">
                    <h1>Esportar tabals de la BD</h1>

                    <form action="{{ route('export.tables') }}" method="POST">
                        @csrf
                        <div>
                            <input type="checkbox" id="checkAll" />
                            <label for="checkAll">Marcar/Desmarcar todas</label>
                        </div>

                        @php
                            $tablesPerColumn = 8; // Número de tablas por columna
                        @endphp

                        <div class="row">
                            @foreach ($tableNames as $index => $tableName)
                                @if ($index % $tablesPerColumn === 0 && $index !== 0)
                        </div>
                        <div class="row">
                            @endif

                            <div class="col-md-3"> {{-- Usamos col-md-3 para hacer 4 columnas por fila --}}
                                <input type="checkbox" name="tables[]" value="{{ $tableName }}" class="table-checkbox" />
                                <label>{{ $tableName }}</label>
                            </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Exportar Seleccionadas</button>
                    </form>

                </div>
            </di>
        </div>
        <div class="col-md-3">
            <div class="page-content container-fluid">
                <h3>Importar tablas data base</h3>


                <form action="{{ route('import.tables') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="file" name="file" required>
                    <button type="submit" class="btn btn-primary">Importar SQL</button>
                    
                </form>
            </div>
        </div>
    </div>



    <script>
        document.getElementById('checkAll').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('.table-checkbox');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });
    </script>
@endsection
