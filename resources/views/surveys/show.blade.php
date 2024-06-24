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
        <h1 class="page-header">Respuestas para la encuesta C-FO-SE-076</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="table-basic-7">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Usted esta viendo las respuestas de un empleado en especifico
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

                        <p><b>Nombre:</b> {{ $survey->user->name }}</p>
                        <p><b>Area:</b> {{ $survey->user->area }}</p>
                        <p><b>Número de empleado:</b> {{ $survey->user->employee_code }}</p>

                        {{-- BEGIN Sección 1.1 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.1</b> ¿Menciona cuáles son los ejes de nuestra política integral?
                        </div>

                        <p>{{ $answers->questionOne }}</p>
                        {{-- END Sección 1.1 --}}

                        {{-- BEGIN Sección 1.2 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.2</b> ¿Dónde podemos consultar/encontrar nuestra política?
                        </div>

                        <p>{{ $answers->questionTwo }}</p>
                        {{-- END Sección 1.2 --}}

                        {{-- BEGIN Sección 1.3 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.3</b> ¿Cuál es nuestra ambición en Seguridad y salud?
                        </div>

                        <p>{{ $answers->questionThree }}</p>
                        {{-- END Sección 1.3 --}}

                        {{-- BEGIN Sección 1.4 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.4</b> ¿Cuál es nuestra ambición en Calidad y superioridad?
                        </div>

                        <p>{{ $answers->questionFour }}</p>
                        {{-- END Sección 1.4 --}}

                        {{-- BEGIN Sección 1.5 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.5</b> ¿Cuál es nuestra ambición en medio ambiente?
                        </div>

                        <p>{{ $answers->questionFive }}</p>
                        {{-- END Sección 1.5 --}}

                        {{-- BEGIN Sección 1.6 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.6</b> ¿Cuál es nuestra ambición en Diversidad e inclusión?
                        </div>

                        <p>{{ $answers->questionSix }}</p>
                        {{-- END Sección 1.6 --}}

                        {{-- BEGIN Sección 1.7 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.7</b> ¿Cómo vives en el trabajo y en casa tu compromiso con la seguridad-Salud?
                        </div>

                        <img src="{{ $answers->questionSevenImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionSeven }}</p>
                        {{-- END Sección 1.7 --}}

                        {{-- BEGIN Sección 1.8 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.8</b> ¿Cómo vives en el trabajo y en casa tu compromiso con la calidad y superioridad?
                        </div>

                        <img src="{{ $answers->questionEightImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionEight }}</p>
                        {{-- END Sección 1.8 --}}

                        {{-- BEGIN Sección 1.9 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.9</b> ¿Cómo vives en el trabajo y en casa tu compromiso con el medio ambiente?
                        </div>

                        <img src="{{ $answers->questionNineImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionNine }}</p>
                        {{-- END Sección 1.9 --}}

                        {{-- BEGIN Sección 1.10 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.10</b> ¿Cómo vives en el trabajo y en casa tu compromiso con la Diversidad e inclusión?
                        </div>

                        <img src="{{ $answers->questionTenImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionTen }}</p>
                        {{-- END Sección 1.10 --}}

                        {{-- BEGIN Sección 1.13 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.13</b> ¿Consideras que la política es la base de trabajo en este sitio?
                        </div>

                        <p>{{ $answers->questionThirteen }}</p>
                        {{-- END Sección 1.13 --}}

                        {{-- BEGIN Sección 1.14 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.14</b> ¿Por qué crees que es importante comprender y llevar a la práctica nuestra política?
                        </div>

                        <img src="{{ $answers->questionFourteenImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionFourteen }}</p>
                        {{-- END Sección 1.14 --}}

                        {{-- BEGIN Sección 1.15 --}}
                        <div class="alert alert-muted">
                            <b>Sección 1.15</b> Menciona que herramientas tenemos para tener cero accidentabilidades
                        </div>

                        <img src="{{ $answers->questionFifteenImg }}" class="mb-4" width="500px">

                        <p>{{ $answers->questionFifteen }}</p>
                        {{-- END Sección 1.15 --}}

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
