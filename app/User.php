<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Tutorial;
use App\TutorialComment;
use App\CourseComment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token','phone','access','seen','user_type','profile_picture','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function userTutorials(){
        return $this->hasMany('App\Tutorial','instructor_id');
    }

    public function tutorialComments(){
        return $this->hasMany('App\TutorialComment','student_id');
    }

    public function courseComments(){
        return $this->hasMany('App\CourseComment','student_id');
    }
}
