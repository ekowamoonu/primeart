<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\TopicInstructor;
use App\Tutorial;

class AdminController extends Controller
{
    public function showAdminMainPage(){
    	return view('admin-dashboard.admin-main');
    }

    public function showNewCoursePage(){
    	return view('admin-dashboard.upload-new-course-video');
    }


    public function showNewTutorialPage(){
        
    	return view('admin-dashboard.upload-new-tutorial-video',[
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);
    }


    public function newTutorial(Request $request){

        $this->validate(request(),[
           "title"=>"required|string|max:40",
           "description"=>"required|string",
           "topic"=>"required",
           "instructor"=>"required",
           "skill_level"=>"required",
           "duration"=>"required|string",
           "source_file"=>"required",
        ]);

        Tutorial::create([
           "title"=>request('title'),
           "description"=>request('description'),
           "topic_id"=>request('topic'),
           "instructor_id"=>request('instructor'),
           "skill_level_id"=>request('skill_level'),
           "duration"=>request('duration'),
           "source_file"=>request('source_file'),
        ]);

        session()->flash('message',"set");
        
        return view('admin-dashboard.upload-new-tutorial-video',[
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);
    }

    public function showCoursesManagementPage(){
    	return view('admin-dashboard.courses-management');
    }
}
