<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $parameters = Input::all();
        //var_dump($parameters);
        if (!empty($parameters)) {
            $questions = Question::where($parameters)->get();
            return response()->json($questions, 200);
        }
        return Question::all();
    }

    public function show(Question $question)
    {
        return $question;
    }

    public function store(Request $request)
    {
        $question = Question::create($request->all());

        return response()->json($question, 201);
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());

        return response()->json($question, 200);
    }

    public function delete(Question $question)
    {
        $question->delete();

        return response()->json(null, 204);
    }
}
