@extends('layouts.dashboard-layout')

@section('appHeader')
    <style>
        .dark-lighter {
            color: #575d63;
        }

        .grey {
            color: #b6c2c9;
        }

        .red {
            color: #ff5b57;
        }

    </style>
@endsection

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
            <li class="breadcrumb-item active">Estadisticas</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Estadisticas <small></small></h1>
        <!-- END page-header -->

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

                <p><i class="fas fa-square dark-lighter"></i> Seguridad, Calidad, Costo, Entrega, Motivación, Medio
                    ambiente.</p>

                <p><i class="fas fa-square grey"></i> Damaway, wise, 12 básicos.</p>

                <p><i class="fas fa-square red"></i> Seguridad y salud, Calidad y superioridad, medio ambiente, diversidad e
                    inclusión.</p>

                <div class="questionOneChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> Comedor, Vigilancia, Sala code.</p>

                <p><i class="fas fa-square grey"></i> Pantalla comunicación, Credencial, Sala Visión.</p>

                <p><i class="fas fa-square red"></i> Pasillo principal, Sala wise.</p>

                <div class="questionTwoChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> Generación de cazaincidentes, acuerdos positivos, Casoles.</p>

                <p><i class="fas fa-square grey"></i> Llevar una hidratación más saludable al mayor número de mexicanos.</p>

                <p><i class="fas fa-square red"></i> Garantizar un lugar de trabajo seguro y saludable.</p>

                <div class="questionThreeChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> Satisfacción total de nuestros consumidores y clientes de
                    manera sostenible.</p>

                <p><i class="fas fa-square grey"></i> Registro de ABC, cero PNC.</p>

                <p><i class="fas fa-square red"></i> Menor a cuatro quejas al año.</p>

                <div class="questionFourChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> KPI de energía eléctrica 38 KW y agua 1.8</p>

                <p><i class="fas fa-square grey"></i> Separación de residuos en nuestras áreas de trabajo</p>

                <p><i class="fas fa-square red"></i> Generar un impacto ambiental positivo y contribuir a la preservación
                    del ambiente</p>

                <div class="questionFiveChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> Generar un impacto ambiental positivo y contribuir a la
                    preservación del ambiente</p>

                <p><i class="fas fa-square grey"></i> Garantizar que todos y todas puedan acceder a mismas oportunidades de
                    desarrollo</p>

                <p><i class="fas fa-square red"></i> Garantizar un trabajo lugar de trabajo seguro y saludable</p>

                <div class="questionSixChart h-250px"></div>

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

                <p><i class="fas fa-square dark-lighter"></i> Si</p>

                <p><i class="fas fa-square grey"></i> No</p>

                <div class="questionSevenChart h-250px"></div>

            </div>
        </div>
        <!-- END panel -->

    </div>
@endsection

@section('appFooter')
    <script>

        drawQuestionChart('.questionOneChart', [
          {{ $answers['one'] }},
          {{ $answers['two'] }},
          {{ $answers['three'] }}
        ]);

        drawQuestionChart('.questionTwoChart', [
          {{ $answers['four'] }},
          {{ $answers['five'] }},
          {{ $answers['six'] }}
        ]);

        drawQuestionChart('.questionThreeChart', [
          {{ $answers['seven'] }},
          {{ $answers['eight'] }},
          {{ $answers['nine'] }}
        ]);

        drawQuestionChart('.questionFourChart', [
          {{ $answers['ten'] }},
          {{ $answers['eleven'] }},
          {{ $answers['twelve'] }}
        ]);

        drawQuestionChart('.questionFiveChart', [
          {{ $answers['thirteen'] }},
          {{ $answers['fourteen'] }},
          {{ $answers['fifteen'] }}
        ]);

        drawQuestionChart('.questionSixChart', [
          {{ $answers['twenty'] }},
          {{ $answers['sixteen'] }},
          {{ $answers['seventeen'] }}
        ]);

        drawQuestionChart('.questionSevenChart', [
          {{ $answers['eighteen'] }},
          {{ $answers['nineteen'] }},
          0
        ]);

        function drawQuestionChart(divElement = '', dataArray = [])
        {
            let data = [];
            let series = 3;
            let colorArray = [COLOR_DARK_LIGHTER, COLOR_GREY, COLOR_RED];
            
            for (let i = 0; i < series; i++) {
                data[i] = {
                    label: '',
                    data: dataArray[i],
                    color: colorArray[i]
                };
            }

            $.plot($(divElement), data, {
                series: {
                    pie: {
                        innerRadius: 0.5,
                        show: true,
                        combine: {
                            threshold: 0.1
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    hoverable: true,
                    clickable: true
                },
                legend: {
                    show: false
                }
            }); 
        }
    </script>
@endsection
