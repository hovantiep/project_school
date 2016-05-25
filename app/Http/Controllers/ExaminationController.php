<?php

namespace App\Http\Controllers;

use App\Codes;
use App\Http\Requests;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function getIndex()
    {
        $id = 1;
        $db = Codes::select('content')->where('id', $id)->first();
        $questions = json_decode($db['content']);
        return view('frontend.template.quiz')
            ->with('questions', $questions);
    }

    public function postIndex(Request $request)
    {
        $id = 1;
        $count = 0;
        $db = Codes::select('answer_table')->where('id', $id)->first();
        $answer = json_decode($db['answer_table'], true);

        foreach ($answer as $key => $value) {
            if ($request[$key] == $value) $count++;
        }
        dd($count);
    }

    private function MixQuestions()
    {

    }

    private function AnswerTable()
    {

    }
}
