<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Topic;
use App\SkillLevel;
use App\CoursePart;

class Course extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function owningUser(){
    	return $this->belongsTo('App\User','instructor_id');
    }

    public function owningTopic(){
    	return $this->belongsTo('App\Topic','topic_id');
    }

    public function owningSkillLevel(){
    	return $this->belongsTo('App\SkillLevel','skill_level_id');
    }

    public function courseParts(){
        return $this->hasMany('App\CoursePart','course_id');
    }
}
