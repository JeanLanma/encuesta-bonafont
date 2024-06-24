@extends('layouts.page-without-sidebar')

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.surveys') }}">Encuestas</a></li>
            <li class="breadcrumb-item active">C-FO-SE-076</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Encuesta Política Seguridad y Salud, Calidad y Superioridad, Medio ambiental, Diversidad e
            inclusión</h1>
        <!-- END page-header -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Lea con atención</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <p>Criterios para responder</p>
                <ul>
                    <li>Todas las preguntas son obligatorias</li>
                </ul>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
        <!-- END panel -->

    <form method="POST" action="{{ route('surveys.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Nombre completo</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control mb-1" name="fullname" placeholder="Nombre y apellidos" value="{{ Auth::user()->name }}"
                            readonly>
                        <small class="f-s-12 text-grey-darker">No compartiremos esta informacion con nadie.</small>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Área de trabajo</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="area" placeholder="Área" required value="{{ Auth::user()->area }}" readonly>
                    </div>
                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.1</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">

                <div class="alert alert-muted">
                    ¿Menciona cuáles son los ejes de nuestra política integral?
                </div>

                <div class="form-group row m-b-10 align-items-center">
                    <div class="col-md-4">
                        <div class="radio radio-css pt-0 radio-inline">
                            <input required="" type="radio"
                                value="1"
                                id="inlineCssCheckbox1" name="questionOne" data-com.bitwarden.browser.user-edited="yes">
                            <label for="inlineCssCheckbox1">Seguridad, Calidad, Costo, Entrega, Motivación, Medio
                                ambiente.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/uno/resp-uno.png') }}"
                            style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css pt-0 radio-inline">
                            <input required="" type="radio" value="2" id="inlineCssCheckbox2"
                                name="questionOne">
                            <label for="inlineCssCheckbox2">Damaway, wise, 12 básicos.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/uno/resp-dos.png') }}"
                            style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css pt-0 radio-inline">
                            <input required="" type="radio"
                                value="3"
                                id="inlineCssCheckbox3" name="questionOne">
                            <label for="inlineCssCheckbox3">Seguridad y salud, Calidad y superioridad, medio ambiente,
                                diversidad e inclusión.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/uno/resp-tres.png') }}"
                            style="width: 100% !important; heigth: auto !important;">
                    </div>
                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.2</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Dónde podemos consultar/encontrar nuestra política?
                </div>

                <div class="form-group row m-b-10 align-items-center">

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionTwo" id="respuesta6" value="4" data-com.bitwarden.browser.user-edited="yes">
                            <label for="respuesta6">Comedor, Vigilancia, Sala code.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/dos/resp-uno.png') }}" style="heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionTwo" id="respuesta7" value="5" data-com.bitwarden.browser.user-edited="yes">
                            <label for="respuesta7">Pantalla comunicación, Credencial, Sala Visión.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/dos/resp-dos.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionTwo" id="respuesta8" value="6" data-com.bitwarden.browser.user-edited="yes">
                            <label for="respuesta8">Pasillo principal, Sala wise.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/dos/resp-tres.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.3</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cuál es nuestra ambición en Seguridad y salud?
                </div>

                <div class="form-group row m-b-10 align-items-center">

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionThree" id="respuesta9" value="7">
                            <label for="respuesta9">Generación de cazaincidentes, acuerdos positivos, Casoles.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/tres/resp-uno.jpeg') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionThree" id="respuesta10" value="8">
                            <label for="respuesta10">Llevar una hidratación más saludable al mayor número de mexicanos.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/tres/resp-dos.jpeg') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionThree" id="respuesta11" value="9">
                            <label for="respuesta11">Garantizar un lugar de trabajo seguro y saludable.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/tres/resp-tres.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.4</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cuál es nuestra ambición en Calidad y superioridad?
                </div>

                <div class="form-group row m-b-10 align-items-center">

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFour" id="respuesta12" value="10">
                            <label for="respuesta12">Satisfacción total de nuestros consumidores y clientes de manera sostenible.</label>
                            <img src="{{ asset('img/respuestas/cuatro/resp-uno.png') }}" style="width: 100% !important; heigth: auto !important;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFour" id="respuesta13" value="11">
                            <label for="respuesta13">Registro de ABC, cero PNC.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/cuatro/resp-dos.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFour" id="respuesta14" value="12">
                            <label for="respuesta14">Menor a cuatro quejas al año.</label>
                        </div>
                        <img src="{{ asset('img/respuestas/cuatro/resp-tres.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.5</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cuál es nuestra ambición en medio ambiente?
                </div>

                <div class="form-group row m-b-10 align-items-center">

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFive" id="respuesta15" value="13">
                            <label for="respuesta15">KPI de energía eléctrica 38 KW y agua 1.8</label>
                        </div>
                        <img src="{{ asset('img/respuestas/cinco/resp-uno.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFive" id="respuesta16" value="14">
                            <label for="respuesta16">Separación de residuos en nuestras áreas de trabajo</label>
                        </div>
                        <img src="{{ asset('img/respuestas/cinco/resp-dos.jpeg') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionFive" id="respuesta17" value="15">
                            <label for="respuesta17">Generar un impacto ambiental positivo y contribuir a la preservación del ambiente</label>
                        </div>
                        <img src="{{ asset('img/respuestas/cinco/resp-tres.jpeg') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.6</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cuál es nuestra ambición en Diversidad e inclusión?
                </div>

                <div class="form-group row m-b-10 align-items-center">

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionSix" id="respuesta18" value="20" data-com.bitwarden.browser.user-edited="yes">
                            <label for="respuesta18">Generar un impacto ambiental positivo y contribuir a la preservación del ambiente</label>
                        </div>
                        <img src="{{ asset('img/respuestas/seis/resp-uno.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>
                    <!--./ -->

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionSix" id="respuesta19" value="16">
                            <label for="respuesta19">Garantizar que todos y todas puedan acceder a mismas oportunidades de desarrollo</label>
                        </div>
                        <img src="{{ asset('img/respuestas/seis/resp-dos.jpeg') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionSix" id="respuesta20" value="17">
                            <label for="respuesta20">Garantizar un trabajo lugar de trabajo seguro y saludable</label>
                        </div>
                        <img src="{{ asset('img/respuestas/seis/resp-tres.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>

                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.7</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">

                <div class="alert alert-muted">
                    ¿Cómo vives en el trabajo y en casa tu compromiso con la seguridad-Salud?
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionSeven"></textarea>
                    </div>
                </div>

                <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionSevenImg" accept="image/*">
                    </div>
                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.8</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cómo vives en el trabajo y en casa tu compromiso con la calidad y superioridad?
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionEight"></textarea>
                    </div>
                </div>

                <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionEightImg" accept="image/*">
                    </div>
                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.9</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">

                <div class="alert alert-muted">
                    ¿Cómo vives en el trabajo y en casa tu compromiso con el medio ambiente?
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionNine"></textarea>
                    </div>
                </div>

                <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionNineImg" accept="image/*">
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.10</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Cómo vives en el trabajo y en casa tu compromiso con la Diversidad e inclusión?
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionTen"></textarea>
                    </div>
                </div>

                <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionTenImg" accept="image/*">
                    </div>
                </div>

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.13</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Consideras que la política es la base de trabajo en este sitio?
                </div>
                <div class="form-group row m-b-10 align-items-center">
								
                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionThirteen" id="respuesta21" value="18">
                            <label for="respuesta21">Si</label>
                        </div>
                        <img src="{{ asset('img/respuestas/siete/resp-uno.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>
                    

                    <div class="col-md-4">
                        <div class="radio radio-css radio-inline">
                            <input required="" type="radio" name="questionThirteen" id="respuesta22" value="19">
                            <label for="respuesta22">No</label>
                        </div>
                        <img src="{{ asset('img/respuestas/siete/resp-dos.png') }}" style="width: 100% !important; heigth: auto !important;">
                    </div>
                    

                </div>
            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.14</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    ¿Por qué crees que es importante comprender y llevar a la práctica nuestra política?
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionFourteen"></textarea>
                    </div>
                </div>

                {{-- <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionFourteenImg" accept="image/*">
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- END panel -->

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sección 1.15</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="alert alert-muted">
                    Menciona que herramientas tenemos para tener cero accidentabilidades
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Escribe tu respuesta:</label>
                    <div class="col-md-9">
                        <textarea required="" class="form-control" rows="3" name="questionFifteen"></textarea>
                    </div>
                </div>

                {{-- <div class="form-group row m-b-15 mt-4">
                    <label class="col-form-label col-md-3 mb-2">Adjunta una imagen</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="questionFifteenImg" accept="image/*">
                    </div>
                </div> --}}

                <input type="submit" class="btn btn-primary btn-block mt-4" value="Enviar cuestionario" style="width: 100%;">
            </div>
        </div>
        <!-- END panel -->

    </form>

    </div>
@endsection
