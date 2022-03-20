<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Tutorial;
use App\Topic;
use App\User;
use App\Custom\TopicInstructor; //list topics and instructors

class TutorialController extends Controller
{

    public function showTutorialsPage(){

       $tutorials = Cache::remember('tutorials',1*60,function(){

           return Tutorial::with("owninguser","owningTopic","owningSkillLevel")->orderBy("release_date","desc")->paginate(10);
               //cache for 48 hours
       });

      	return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);
    }


    public function searchTutorial(Request $request){
          
         $this->validate(request(),[
          	"search_phrase"=>"required|string"
         ]);

         $tutorials = Tutorial::where('title','LIKE','%'.request('search_phrase').'%')->orWhere('description','LIKE','%'.request('search_phrase').'%')->paginate(10);

         return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function searchTutorialByTopic($id){

        $tutorials = Tutorial::where("topic_id","=",$id)->paginate(10);

         return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function searchTutorialByInstructor($id){

        $tutorials = Tutorial::where("instructor_id","=",$id)->paginate(10);

         return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function searchTutorialBySkillLevel($id){

        $tutorials = Tutorial::where("skill_level_id","=",$id)->paginate(10);

         return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function sortAtoZ(){

        $tutorials = Tutorial::orderBy("title","asc")->paginate(10);

         return view('user-dashboard.tutorials',[
           "tutorials"=>$tutorials,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function showTutorialDetailPage(Tutorial $tutorial){
        /*related tutorials. Get it by a similar instructor or similar topic*/
        $related_tutorials = Tutorial::where("topic_id","=",$tutorial->topic_id)->orWhere("instructor_id","=",$tutorial->instructor_id)->orderByRaw("RAND()")->take(6)->get(); 

        return view('user-dashboard.tutorial-detail',compact('tutorial','related_tutorials'));
    }





}
