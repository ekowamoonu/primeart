<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class CoursePart extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function owningCourse(){
    	return $this->belongsTo('App\Course','course_id');
    }
}
