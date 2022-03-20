<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Topic;
use App\SkillLevel;

class Tutorial extends Model
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
}
