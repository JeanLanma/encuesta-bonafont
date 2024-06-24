<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta C-FO-SE-076</title>
    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1, h2 {
            text-align: center;
        }

        .employee-info {
            margin-bottom: 30px;
        }

        .question-content {
            margin-bottom: 40px;
        }

        .question-title {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Encuesta C-FO-SE-076</h1>
    <h2>Encuesta Política Seguridad y Salud, Calidad y Superioridad, Medio ambiental, Diversidad e inclusión.</h2>

    <div class="employee-info">
        <p><b>Nombre de empleado:</b> {{ $survey->user->name }}</p>
        <p><b>Area:</b> {{ $survey->user->area }}</p>
        <p><b>Número de empleado:</b> {{ $survey->user->employee_code }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.1 ¿Menciona cuáles son los ejes de nuestra política integral?
        </p>
    
        <p>{{ $answers->questionOne }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.2 ¿Dónde podemos consultar/encontrar nuestra política?
        </p>
    
        <p>{{ $answers->questionTwo }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.3 ¿Cuál es nuestra ambición en Seguridad y salud?
        </p>
    
        <p>{{ $answers->questionThree }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.4 ¿Cuál es nuestra ambición en Calidad y superioridad?
        </p>
    
        <p>{{ $answers->questionFour }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.5 ¿Cuál es nuestra ambición en medio ambiente?
        </p>
    
        <p>{{ $answers->questionFive }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.6 ¿Cuál es nuestra ambición en Diversidad e inclusión?
        </p>
    
        <p>{{ $answers->questionSix }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.7 ¿Cómo vives en el trabajo y en casa tu compromiso con la seguridad-Salud?
        </p>
    
        <p>{{ $answers->questionSeven }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.8 ¿Cómo vives en el trabajo y en casa tu compromiso con la calidad y superioridad?
        </p>
    
        <p>{{ $answers->questionEight }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.9 ¿Cómo vives en el trabajo y en casa tu compromiso con el medio ambiente?
        </p>
    
        <p>{{ $answers->questionNine }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.10 ¿Cómo vives en el trabajo y en casa tu compromiso con la Diversidad e inclusión?
        </p>
    
        <p>{{ $answers->questionTen }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.13 ¿Consideras que la política es la base de trabajo en este sitio?
        </p>
    
        <p>{{ $answers->questionThirteen }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.14 ¿Por qué crees que es importante comprender y llevar a la práctica nuestra política?
        </p>
    
        <p>{{ $answers->questionFourteen }}</p>
    </div>

    <div class="question-content">
        <p class="question-title">
            Sección 1.15 Menciona que herramientas tenemos para tener cero accidentabilidades
        </p>
    
        <p>{{ $answers->questionFifteen }}</p>
    </div>

</body>
</html>