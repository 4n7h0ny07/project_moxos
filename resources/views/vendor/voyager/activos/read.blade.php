@extends('voyager::master')

@section('page_title', __('voyager::generic.view') . ' ' . $dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }}
        {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('edit', $dataTypeContent)
            <a href="{{ route('voyager.' . $dataType->slug . '.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
                <i class="glyphicon glyphicon-pencil"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
            </a>
        @endcan
        @can('delete', $dataTypeContent)
            @if ($isSoftDeleted)
                <a href="{{ route('voyager.' . $dataType->slug . '.restore', $dataTypeContent->getKey()) }}"
                    title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore"
                    data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
                </a>
            @else
                <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete"
                    data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
                </a>
            @endif
        @endcan
        @can('browse', $dataTypeContent)
            <a href="{{ route('voyager.' . $dataType->slug . '.index') }}" class="btn btn-warning">
                <i class="glyphicon glyphicon-list"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
            </a>
        @endcan
    </h1>
    @include('voyager::multilingual.language-selector')

@stop

@section('content')
    <div class="page-content container-fluid">

        <div class="row">

            <!-- FOTO -->
            <div class="col-md-4">

                <div class="panel panel-bordered">

                    <div class="panel-body text-center">

                        @php
                            use Illuminate\Support\Facades\Storage;

                            $image =
                                !empty($dataTypeContent->images) &&
                                Storage::disk('public')->exists($dataTypeContent->images)
                                    ? Voyager::image($dataTypeContent->images)
                                    : asset('storage/images/default-image.png');
                        @endphp

                        <img src="{{ $image }}" class="img-responsive img-thumbnail"
                            style="margin:auto; max-height:300px;">

                        <hr>

                        <h3>
                            {{ $dataTypeContent->name }}
                        </h3>

                        <p>
                            <strong>{{ $dataTypeContent->code }}</strong>
                        </p>

                        <span class="label label-success">
                            {{ $dataTypeContent->status }}
                        </span>

                    </div>

                </div>

            </div>

            <!-- DATOS -->
            <div class="col-md-8">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Información General
                        </h3>
                    </div>

                    <table class="table table-bordered">

                        <tr>
                            <th width="30%">Código</th>
                            <td>{{ $dataTypeContent->code }}</td>
                        </tr>

                        <tr>
                            <th>Nombre</th>
                            <td>{{ $dataTypeContent->name }}</td>
                        </tr>

                        <tr>
                            <th>Host</th>
                            <td>{{ $dataTypeContent->host }}</td>
                        </tr>

                        <tr>
                            <th>IP</th>
                            <td>{{ $dataTypeContent->ip }}</td>
                        </tr>

                        <tr>
                            <th>Número Serie</th>
                            <td>{{ $dataTypeContent->serialnumber }}</td>
                        </tr>

                        <tr>
                            <th>Responsable</th>
                            <td>
                                {{ optional($dataTypeContent->persona)->name }}
                            </td>
                        </tr>

                        <tr>
                            <th>Registrado por</th>
                            <td>
                                {{ optional($dataTypeContent->user)->name }}
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

        <!-- FECHAS -->

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Fechas Importantes
                        </h3>
                    </div>

                    <table class="table table-bordered">

                        <tr>
                            <th>Fecha Compra</th>
                            <td>{{ $dataTypeContent->date_compra }}</td>

                            <th>Fecha Alta</th>
                            <td>{{ $dataTypeContent->date_alta }}</td>
                        </tr>

                        <tr>
                            <th>Fecha Baja</th>
                            <td>{{ $dataTypeContent->date_baja }}</td>

                            <th>Estado</th>
                            <td>{{ $dataTypeContent->status }}</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

        <!-- DEPRECIACIÓN -->

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Depreciación
                        </h3>
                    </div>

                    <table class="table table-bordered">

                        <tr>

                            <th>Costo Inicial</th>
                            <td>
                                Bs {{ number_format($dataTypeContent->coste, 2, '.', ',') }}
                            </td>

                            <th>Vida Útil</th>
                            <td>
                                {{ $dataTypeContent->vidautil }} años
                            </td>

                        </tr>
                        @php

                            use Carbon\Carbon;

                            $valorInicial = floatval($dataTypeContent->coste ?? 0);

                            $vidaUtil = intval($dataTypeContent->vidautil ?? 1);

                            $fechaCompra = $dataTypeContent->date_compra
                                ? Carbon::parse($dataTypeContent->date_compra)
                                : now();

                            $mesesTranscurridos = $fechaCompra->diffInMonths(now());

                            $totalMesesVidaUtil = $vidaUtil * 12;

                            $depreciacionMensual = $totalMesesVidaUtil > 0 ? $valorInicial / $totalMesesVidaUtil : 0;

                            $depreciacionAcumulada = $depreciacionMensual * $mesesTranscurridos;

                            if ($depreciacionAcumulada > $valorInicial) {
                                $depreciacionAcumulada = $valorInicial;
                            }

                            $valorActual = $valorInicial - $depreciacionAcumulada;

                            $porcentajeDepreciado =
                                $valorInicial > 0 ? ($depreciacionAcumulada * 100) / $valorInicial : 0;

                        @endphp
                        <tr>

                            <th>Meses Transcurridos</th>
                            <td>
                                {{ $mesesTranscurridos }}
                            </td>

                            <th>Depreciación Acumulada</th>
                            <td>
                                Bs {{ number_format($depreciacionAcumulada, 2, '.', ',') }}
                            </td>

                        </tr>
                        <tr>
                            <th>Valor Neto Actual</th>
                            <td colspan="3">
                                <span class="label label-info" style="font-size:16px;">

                                    Bs {{ number_format($valorActual, 2, '.', ',') }}

                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- OBSERVACIONES -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Descripción
                        </h3>
                    </div>
                    <div class="panel-body">
                        {!! $dataTypeContent->description !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- OBSERVACIONES -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Observaciones
                        </h3>
                    </div>
                    <div class="panel-body">
                        {{ $dataTypeContent->observations }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }}
                        {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.' . $dataType->slug . '.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                            value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                        data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function() {
                $('.side-body').multilingual();
            });
        </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function(e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/) ?
                deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
                deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });
    </script>
@stop
