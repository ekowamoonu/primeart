<?php
 
 namespace App\Custom;
 use App\Topic;
 use App\User;
 use App\SkillLevel;

 class TopicInstructor{
    
     public static function listTopics(){
    	return Topic::orderBy('alias','desc')->withCount('tutorials','courses')->get();
     }

     public static function listInstructors(){
     	return User::where("user_type","=","instructor")->orderBy("name","desc")->get();
     }

     public static function listSkillLevels(){
     	return SkillLevel::all();
     }


 }