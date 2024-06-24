<?php

namespace App\Http\Controllers;

use DB;
use App\Survey;
use App\SurveyStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surveys.index');
    }

    public function encuesta1()
    {
        $surveys = Survey::where('user_id', Auth::id());
        
        if($surveys->count() > 0)
        {
            return redirect()->route('dashboard.surveys')->with('info', 'La encuesta ya ha sido contestada con anterioridad.');
        }

        return view('surveys.encuesta1');
    }

    public function list()
    {
        $surveys = Survey::all();
        return view('surveys.list')->with(['surveys' => $surveys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surveys = Survey::where('user_id', Auth::id());
        
        if($surveys->count() > 0)
        {
            return redirect()->route('dashboard.surveys')->with('info', 'La encuesta ya ha sido contestada con anterioridad.');
        }

        // DICCIONARIO DE RESPUESTAS
        $answers = [
            1 => 'Seguridad, Calidad, Costo, Entrega, Motivación, Medio ambiente.',
            2 => 'Damaway, wise, 12 básicos.',
            3 => 'Seguridad y salud, Calidad y superioridad, medio ambiente, diversidad e inclusión.',
            4 => 'Comedor, Vigilancia, Sala code.',
            5 => 'Pantalla comunicación, Credencial, Sala Visión.',
            6 => 'Pasillo principal, Sala wise.',
            7 => 'Generación de cazaincidentes, acuerdos positivos, Casoles.',
            8 => 'Llevar una hidratación más saludable al mayor número de mexicanos.',
            9 => 'Garantizar un lugar de trabajo seguro y saludable.',
            10 => 'Satisfacción total de nuestros consumidores y clientes de manera sostenible.',
            11 => 'Registro de ABC, cero PNC.',
            12 => 'Menor a cuatro quejas al año.',
            13 => 'KPI de energía eléctrica 38 KW y agua 1.8',
            14 => 'Separación de residuos en nuestras áreas de trabajo',
            15 => 'Generar un impacto ambiental positivo y contribuir a la preservación del ambiente',
            16 => 'Garantizar que todos y todas puedan acceder a mismas oportunidades de desarrollo',
            17 => 'Garantizar un trabajo lugar de trabajo seguro y saludable',
            18 => 'Si',
            19 => 'No',
            20 => 'Generar un impacto ambiental positivo y contribuir a la preservación del ambiente',
        ];

        // REGLAS DE VALIDACIÓN
        $rules = [
            'questionOne' => 'required',
            'questionTwo' => 'required',
            'questionThree' => 'required',
            'questionFour' => 'required',
            'questionFive' => 'required',
            'questionSix' => 'required',
            'questionSeven' => 'required',
            'questionEight' => 'required',
            'questionNine' => 'required',
            'questionTen' => 'required',
            'questionThirteen' => 'required',
            'questionFourteen' => 'required',
            'questionFifteen' => 'required',

            // 'questionSevenImg' => 'required',
            // 'questionEightImg' => 'required',
            // 'questionNineImg' => 'required',
            // 'questionTenImg' => 'required',
            // 'questionFourteenImg' => 'required',
            // 'questionFifteenImg' => 'required'
        ];

        $request->validate($rules);

        // SUBIDA DE IMAGENES
        $location = 'public/images/answers/user/'. Auth::id();

        // Imagen de respuesta 7
        $questionSevenImg = '';

        if(!is_null($request['questionSevenImg']))
        {
            $questionSevenImg = Storage::url($request->file('questionSevenImg')->store($location));
        }

        // Imagen de respuesta 8
        $questionEightImg = '';

        if(!is_null($request['questionEightImg']))
        {
            $questionEightImg = Storage::url($request->file('questionEightImg')->store($location));
        }

        $questionNineImg = '';

        if(!is_null($request['questionNineImg']))
        {
            $questionNineImg = Storage::url($request->file('questionNineImg')->store($location));
        }

        // Imagen de respuesta 10
        $questionTenImg = '';

        if(!is_null($request['questionTenImg']))
        {
            $questionTenImg = Storage::url($request->file('questionTenImg')->store($location));
        }

        $questionFourteenImg = '';

        if(!is_null($request['questionFourteenImg']))
        {
            $questionFourteenImg = Storage::url($request->file('questionFourteenImg')->store($location));
        }

        $questionFifteenImg = '';

        if(!is_null($request['questionFifteenImg']))
        {
            $questionFifteenImg = Storage::url($request->file('questionFifteenImg')->store($location));
        }

        // CUERPO DEL DOCUMENTO
        $content = [
            'questionOne' => $answers[$request['questionOne']],
            'questionTwo' => $answers[$request['questionTwo']],
            'questionThree' => $answers[$request['questionThree']],
            'questionFour' => $answers[$request['questionFour']],
            'questionFive' => $answers[$request['questionFive']],
            'questionSix' => $answers[$request['questionSix']],

            'questionSeven' => $request['questionSeven'],
            'questionEight' => $request['questionEight'],
            'questionNine' => $request['questionNine'],
            'questionTen' => $request['questionTen'],
            'questionEleven' => $request['questionEleven'],
            'questionTwelve' => $request['questionTwelve'],

            'questionThirteen' => $answers[$request['questionThirteen']],

            'questionFourteen' => $request['questionFourteen'],
            'questionFifteen' => $request['questionFifteen'],

            'questionSevenImg' => $questionSevenImg,

            'questionEightImg' => $questionEightImg,
            'questionNineImg' => $questionNineImg,
            'questionTenImg' => $questionTenImg,
            'questionFourteenImg' => $questionFourteenImg,
            'questionFifteenImg' => $questionFifteenImg
        ];

        $newSurvey = new Survey;
        $newSurvey->user_id = Auth::id();
        $newSurvey->content = $content;
        $newSurvey->save();

        // Respuesta de pregunta #1
        SurveyStat::where('id', $request['questionOne'])
        ->increment('hits', 1);

        // Respuesta de pregunta #2
        SurveyStat::where('id', $request['questionTwo'])
        ->increment('hits', 1);

        // Respuesta de pregunta #3
        SurveyStat::where('id', $request['questionThree'])
        ->increment('hits', 1);

        // Respuesta de pregunta #4
        SurveyStat::where('id', $request['questionFour'])
        ->increment('hits', 1);

        // Respuesta de pregunta #5
        SurveyStat::where('id', $request['questionFive'])
        ->increment('hits', 1);

        // Respuesta de pregunta #6
        SurveyStat::where('id', $request['questionSix'])
        ->increment('hits', 1);

        // Respuesta de pregunta #13
        SurveyStat::where('id', $request['questionThirteen'])
        ->increment('hits', 1);

        return redirect()->route('dashboard.surveys')->with('info', 'Se han registrado sus respuestas con éxito');
    }

    public function download(Survey $survey)
    {
        $answers = json_decode($survey['content']);
        $pdf = \PDF::loadview('pdf', compact('survey', 'answers'));
        return $pdf->stream('Respuestas del empleado #'. $survey->user->employee_code . '.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        return view('surveys.show')->with([
            'survey' => $survey,
            'answers' => json_decode($survey['content'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
