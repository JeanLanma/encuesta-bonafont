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
        <h1 class="page-header">Encuestas</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">
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

                        {{-- {{ dump($surveys) }} --}}

                        <!-- BEGIN table-responsive -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Encuesta</th>
                                        <th>Empleado</th>
                                        <th>Area</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($surveys as $survey)
                                    <tr>
                                        <td>{{ $survey->id }}</td>
                                        <td>C-FO-SE-076</td>
                                        <td>{{ $survey->user->name }}</td>
                                        <td>{{ $survey->user->area }}</td>
                                        <td nowrap>
                                            <a href="{{ route('surveys.show', $survey) }}" class="btn btn-sm btn-white">Mostrar respuestas</a>

                                            <a href="{{ route('surveys.download', $survey) }}" target="_BLANK" class="btn btn-sm btn-primary">Descargar</a>
                                        </td>
                                    </tr>                                        
                                    @endforeach
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
