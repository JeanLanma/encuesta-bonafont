@extends('layouts.dashboard-layout')

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
            <li class="breadcrumb-item active">Encuestas</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Encuestas @can('admin.surveys.create')<button type="button" class="btn btn-xs btn-outline-primary">Añadir
                encuesta</button>@endcan</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">

                @if(session('info'))
                <div class="alert alert-warning">
                    <strong>Advertencia</strong>
                    {{ session('info') }}
                </div>
                @endif

                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="table-basic-7">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Listado de encuestas realizadas
                        </h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                                    class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">

                        <!-- BEGIN table-responsive -->
                        <div class="table-responsivee">
                            <table class="table table-striped mb-0 align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre de la encuesta</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>C-FO-SE-076</td>
                                        <td nowrap>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary">Opciones</a>
                                                <a href="#" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    @can('admin.surveys.edit')
                                                    <a href="#" class="dropdown-item">Editar</a>
                                                    @endcan
                                                    @can('admin.surveys.destroy')
                                                    <a href="#" class="dropdown-item">Eliminar</a>
                                                    @endcan
                                                    @can('admin.surveys.show')
                                                    <a href="{{ url('/admin/surveys/list/C-FO-SE-076') }}" class="dropdown-item">Mostrar registros</a>
                                                    @endcan
                                                    @can('admin.surveys.stats')
                                                    <a href="{{ url('/admin/stats/C-FO-SE-076/04') }}"
                                                        class="dropdown-item">Mostrar estadisticas</a>
                                                    @endcan
                                                    <a href="{{ route('encuesta1') }}" class="dropdown-item">Contestar</a>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END table-responsive -->

                    </div>
                    <!-- END panel-body -->
                </div>
                <!-- END panel -->
            </div>
            <!-- END col-6 -->
        </div>
        <!-- END row -->
    </div>
@endsection
