<div class="panel panel-bordered">
    <div class="panel-heading">
        <h3 class="panel-title">
            Actividades
        </h3>
    </div>
    @php
        $requerimientos = App\Models\Requerimientos::where('personas_id', $dataTypeContent->id)->count();
        $vacaciones = App\Models\Vacations::where('personas_id', $dataTypeContent->id)->count();
        $altasActivo = App\Models\AltasActivos::where('personas_id', $dataTypeContent->id)->count();
    @endphp

    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-body text-center">
                        <h3>{{ $requerimientos }}</h3>
                        <p>Requerimientos</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-body text-center">
                        <h3>{{ $vacaciones }}</h3>
                        <p>Vacaciones</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-body text-center">
                        <h3>{{ $altasActivo }}</h3>
                        <p>Activos</p>
                    </div>
                </div>
            </div>
        </div>
        @php
            $actividades = [];

            foreach (App\Models\Requerimientos::where('personas_id', $dataTypeContent->id)->get() as $item) {
                $actividades[] = [
                    'fecha' => $item->created_at,
                    'tipo' => 'Requerimiento',
                    'numero' => $item->number_requerimient,
                    'url' => route('requerimientos.pdf', $item->id),
                ];
            }

            foreach (App\Models\Vacations::where('personas_id', $dataTypeContent->id)->get() as $item) {
                $actividades[] = [
                    'fecha' => $item->created_at,
                    'tipo' => 'Vacación',
                    'numero' => $item->id,
                    'url' => route('vacations.pdf', $item->id),
                ];
            }

            foreach (App\Models\AltasActivos::where('personas_id', $dataTypeContent->id)->get() as $item) {
                $actividades[] = [
                    'fecha' => $item->created_at,
                    'tipo' => 'Activo',
                    'numero' => $item->id,
                    'url' => route('altas.pdf', $item->id),
                ];
            }

            collect($actividades)->sortByDesc('fecha');
        @endphp
        <table id="actividadesTable" class="table table-hover">
            <thead>
                <tr>
                    <th>Numero de referencia de la Actividad </th>
                    <th>Fecha de la Actividad</th>
                    <th width="120">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad['tipo'] . ' - ' . $actividad['numero'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($actividad['fecha'])->diffForHumans() }}</td>
                        <td>
                            <a href="{{ $actividad['url'] }}" class="btn btn-sm btn-success" target="_blank">
                                <i class="voyager-file-text"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>


@push('javascript')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#actividadesTable').DataTable({
                pageLength: 10,
                order: [
                    [0, 'desc']
                ],
                responsive: true,
                language: {
                    search: "Buscar:",
                    lengthMenu: "Mostrar _MENU_ registros",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    },
                    emptyTable: "No hay actividades"
                }
            });
        });
    </script>
@endpush
