<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTemplateLine extends Model
{
    //
    protected $fillable = ['number_of_questions', 'min_weight','max_weight','category_id','test_template_id'];

    public function template()
    {
        return $this->belongsTo('App\TestTemplate');
    }
}
