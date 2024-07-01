<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function answer()
    {
        $selectedQuestions = [];
        while (count($selectedQuestions) < 10) {
            $rng = rand(1,30);
            if(!in_array($rng, $selectedQuestions)){
                array_push($selectedQuestions,$rng);
            }
        }
        $query = implode(' OR id = ', $selectedQuestions);
        $questions = DB::table('questions')
            ->select('*')
            ->whereRaw('id = '.$query)
            ->get();
        return view('answer')->with(compact('questions'));
    }
    public function results(Request $request)
    {
        $result = $request->get('result');

        return view('results')->with(compact('result'));
    }
}
