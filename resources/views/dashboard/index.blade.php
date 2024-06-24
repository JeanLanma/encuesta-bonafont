@extends('layouts.dashboard-layout')

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
            <li class="breadcrumb-item active">Tablero</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Tablero <small></small></h1>
        <!-- END page-header -->

        <!-- with end icon -->
        <!-- default -->
        <div class="note note-primary">
            <div class="note-icon"><i class="fas fa-smile-beam"></i></div>
            <div class="note-content">
                <h4><b>Bienvenido(a) a Encuestas Bonafont</b></h4>
                <p>Haz click en la opción <b>Encuestas</b> del menú lateral y posteriormente pulsa en el botón <b>contestar</b> solo en las encuestas que se te indiquen.</p>
            </div>
        </div>
        <!-- end note -->

    </div>
@endsection
