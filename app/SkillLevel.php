<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tutorial;

class SkillLevel extends Model
{
	public $timestamps = false;
    
    protected $guarded = [];

    public function tutorials(){
        return $this->hasMany('App\Tutorial','skill_level_id');
    }
}
