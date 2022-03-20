<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tutorial;
use App\Course;

class Topic extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function tutorials(){
        return $this->hasMany('App\Tutorial','topic_id');
    }

    public function courses(){
        return $this->hasMany('App\Course','topic_id');
    }
}
