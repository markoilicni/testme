<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTemplate extends Model
{
    //
    protected $fillable = ['name', 'description','time_mode','time','test','summary'];

    protected $casts = [
        'test' => 'array',
        'summary' => 'array'
    ];


    public function rules()
    {
        return $this->hasMany('App\TestTemplateLine');
    }
}


/*
{
"name":"Mixed Junior Interview",
"description":"Test for full stack PHP and Front Developers",
"time_mode":"QUESTION_TIME",
"time":"0",
"test":{},
"summary":{},
"rules":[
{"category_id":3,"number_of_questions":2},
{"category_id":2,"number_of_questions":3}
]
}
 */