<?php

namespace App\Http\Controllers;

use App\SurveyStat;
use Illuminate\Http\Request;

class SurveyStatController extends Controller
{
    public function encuesta1()
    {
        $answers = [
            'one' => SurveyStat::where('id', 1)->first()->hits,
            'two' => SurveyStat::where('id', 2)->first()->hits,
            'three' => SurveyStat::where('id', 3)->first()->hits,
            'four' => SurveyStat::where('id', 4)->first()->hits,
            'five' => SurveyStat::where('id', 5)->first()->hits,
            'six' =>  SurveyStat::where('id', 6)->first()->hits,
            'seven' => SurveyStat::where('id', 7)->first()->hits,
            'eight' => SurveyStat::where('id', 8)->first()->hits,
            'nine' => SurveyStat::where('id', 9)->first()->hits,
            'ten' => SurveyStat::where('id', 10)->first()->hits,
            'eleven' => SurveyStat::where('id', 11)->first()->hits,
            'twelve' => SurveyStat::where('id', 12)->first()->hits,
            'thirteen' => SurveyStat::where('id', 13)->first()->hits,
            'fourteen' => SurveyStat::where('id', 14)->first()->hits,
            'fifteen' => SurveyStat::where('id', 15)->first()->hits,
            'sixteen' => SurveyStat::where('id', 16)->first()->hits,
            'seventeen' => SurveyStat::where('id', 17)->first()->hits,
            'eighteen' => SurveyStat::where('id', 18)->first()->hits,
            'nineteen' => SurveyStat::where('id', 19)->first()->hits,
            'twenty' => SurveyStat::where('id', 20)->first()->hits,
        ];

        return view('surveys.stats')->with(['answers' => $answers]);
    }
}
