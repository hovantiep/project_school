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
        $id = 3;
//      get questions form db
        $db = Codes::select('content')->where('id', $id)->first();
        $questions = json_decode($db['content']);

        return view('frontend.template.quiz')
            ->with('questions', $questions);
    }

    public function postIndex(Request $request)
    {
        $id = 3;
//      count times true
        $count = 0;
//      get answer table from db
        $db = Codes::select('answer_table')->where('id', $id)->first();
        $answer = json_decode($db['answer_table']);
//      write mark form answer table
        foreach ($answer as $key => $value) {
            if ($request[$key] == $value) $count++;
        }
        dd($count);
    }

    public function getAdd()
    {
        return view('backend.template.add-quiz');
    }

    public function postAdd(Request $request)
    {
        $chapter = '';
        $level = '';
        $status = '';

//      save to db
        $question = new Questions();
        $question->question = $request['question'];
//      save json format for case
        $temp = [$request['0'], $request['1'], $request['2'], $request['3']];
        $question->case = json_encode($temp);
        $question->answer = json_encode($request['0']);
        $question->save();
    }

    public function getMix()
    {
        $db = Questions::all()->toArray();
        $chapter = [];
//      get chapter form db to select
        foreach ($db as $item) {
            array_push($chapter, $item['chapter']);
        }
//      delete & sort double item
        $chapter = array_unique($chapter);
        sort($chapter);

        return view('backend.template.mix-quiz', compact('chapter'));
    }

    public function postMix(Request $request)
    {
        $ratio = $request['ratio'];
        $level = $request['level'];
        $chapter = $request['chapter'];

//      == create table answer ==
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
//      random item
        shuffle($answer_table);
//      save to db
        $code = new Codes();
        $code->answer_table = json_encode($answer_table);

//      == mix questions ==
        $result = [];
        $db = Questions::all()->whereIn('chapter',$chapter)->toArray();

        foreach ($answer_table as $key => $value) {
//          random question
            $rand = array_rand($db);
            $question = $db[$rand];
            unset($db[$rand]);
//          build case form answer table
            $case = json_decode($question['case'], true);
            while ($case[$value] != json_decode($question['answer'])) {
                shuffle($case);
            }
//          add question to content (case & question)
            array_push($case, $question['question']);
            $result[$key] = $case;
        }
//      save to db
        $code->content = json_encode($result);
        $code->save();
    }

    public function AnswerTable()
    {
        $ratio = [1, 1, 1, 1,];
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
        //dd(json_encode($answer_table));
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
            while ($case[$value] != json_decode($question['answer'])) {
                shuffle($case);
            }

            array_push($case, $question['question']);
            $result[$key] = $case;

        }
        dd(json_encode($result));
    }


}
