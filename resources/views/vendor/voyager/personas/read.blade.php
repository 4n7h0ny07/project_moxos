@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('edit', $dataTypeContent)
            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
                <i class="glyphicon glyphicon-pencil"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
            </a>
        @endcan
        @can('delete', $dataTypeContent)
            @if($isSoftDeleted)
                <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
                </a>
            @else
                <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
                </a>
            @endif
        @endcan
        @can('browse', $dataTypeContent)
        <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
            <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
        </a>
        @endcan
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')

<div class="container-fluid">

    <div class="row">

        {{-- Panel lateral --}}
        <div class="col-md-3">

            @include('vendor.voyager.personas.partials.sidebar')

        </div>


        {{-- Panel principal --}}
        <div class="col-md-9">

            <div class="panel panel-bordered">

                <div class="panel-body">

                    <ul class="nav nav-tabs">

                        <li class="active">
                            <a data-toggle="tab" href="#datos">
                                Datos Personales
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#trabajo">
                                Trabajo
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#contactos">
                                Contactos
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#archivos">
                                Archivos
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#historial">
                                Historial
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        <div id="datos" class="tab-pane fade in active">

                            @include('vendor.voyager.personas.tabs.datos')

                        </div>

                        <div id="trabajo" class="tab-pane fade">

                            @include('vendor.voyager.personas.tabs.trabajo')

                        </div>

                        <div id="contactos" class="tab-pane fade">

                            @include('vendor.voyager.personas.tabs.contactos')

                        </div>

                        <div id="archivos" class="tab-pane fade">

                            @include('vendor.voyager.personas.tabs.archivos')

                        </div>

                        <div id="historial" class="tab-pane fade">

                            @include('vendor.voyager.personas.tabs.historial')

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Timeline de actividades --}}

    <div class="row">

        <div class="col-md-12">

            @include('vendor.voyager.personas.timelines.actividades')

        </div>

    </div>

</div>

@stop