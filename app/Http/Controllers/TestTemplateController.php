<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\TestTemplate;
use \App\TestTemplateLine;

class TestTemplateController extends Controller
{
    //
    public function index()
    {
        $parameters = Input::all();
        //var_dump($parameters);
        if (!empty($parameters)) {
            $questions = TestTemplate::where($parameters)->get();
            return response()->json($questions, 200);
        }


        return TestTemplate::all();
    }

    public function show(TestTemplate $testTemplate)
    {
        $testTemplate['rules']=$testTemplate->rules;
        return $testTemplate;
    }

    public function store(Request $request)
    {

        $testTemplate = TestTemplate::create($request->all());

        foreach($request->all()['rules'] as $rule)
        {
            $rule['test_template_id'] = $testTemplate['id'];
            TestTemplateLine::create($rule);
        }

        return response()->json($testTemplate, 201);
    }

    public function update(Request $request, TestTemplate $testTemplate)
    {
        $testTemplate->update($request->all());

        return response()->json($testTemplate, 200);
    }

    public function delete(TestTemplate $testTemplate)
    {
        $testTemplate->delete();

        return response()->json(null, 204);
    }
}
