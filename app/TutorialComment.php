<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tutorial;
use App\User;

class TutorialComment extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function owningUser(){
    	return $this->belongsTo('App\User','instructor_id');
    }

    public function owningTutorial(){
    	return $this->belongsTo('App\User','tutorial_id');
    }
}
