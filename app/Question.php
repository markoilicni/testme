<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['question', 'answers','weight','time','category_id','solution'];

    protected $casts = [
        'answers' => 'array',
        'solution' => 'array'
    ];

}
