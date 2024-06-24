@extends('layouts.dashboard-layout')

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Usuarios</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">

                @if(session('info'))
                    <div class="alert alert-success">
                        <strong>{{ session('info') }}</strong>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="table-basic-7">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Listado de usuarios
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

                        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                            <div class="row mb-3">
                                <label class="form-label col-form-label col-md-3">Nombre</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="Nombre"
                                        name="name" value="{{ $user->name }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label col-form-label col-md-3">Area</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="Area"
                                        name="area" value="{{ $user->area }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label col-form-label col-md-3">Número de empleado</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="Número de empleado"
                                        name="employee_code" value="{{ $user->employee_code }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label col-form-label col-md-3">Rol</label>
                                <div class="col-md-7">
                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) !!}
                                            {{ $role->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label col-form-label col-md-3">Contraseña</label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-7">
                                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}

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
