<?php

namespace App\Http\Controllers;

use App\Codes;
use App\Http\Requests;
use App\Questions;
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
        $answer = json_decode($db['answer_table']);

        foreach ($answer as $key => $value) {
            if ($request[$key] == $value) $count++;
        }
        dd($count);
    }

    public function AnswerTable()
    {
        $ratio = [1, 1, 1, 0,];
        $answer_table = [];
        $inc = 0;
        foreach ($ratio as $key => $val) {
            if ($val > 0) {
                for ($i = 1; $i <= $val; $i++) {
                    $answer_table[$inc] = $key;
                    $inc++;
                }
            }
        }
        shuffle($answer_table);
        echo json_encode($answer_table);
        $this->MixQuestions($answer_table);
    }

    private function MixQuestions($answer_table)
    {
        $id = 1;
        $result = [];
        $db = Questions::all()->toArray();

        foreach ($answer_table as $key => $value) {
            $rand = array_rand($db);
            $question = $db[$rand];
            unset($db[$rand]);

            $case = json_decode($question['case'], true);

            while ($case[$value] != $question['answer']) {
                shuffle($case);
            }

            array_push($case, $question['question']);
            $result[$key] = $case;

        }
        dd(json_encode($result));
    }


}
