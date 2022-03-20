<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Course;
use App\Topic;
use App\User;
use App\CoursePart;
use App\Custom\TopicInstructor;

class CourseController extends Controller
{
   
    public function showCoursesPage(){

    	$courses = Cache::remember('courses',1*60,function(){

           return Course::with("owninguser","owningTopic","owningSkillLevel")->orderBy("release_date","desc")->paginate(10);
               //cache for 48 hours
        });

    	return view('user-dashboard.courses',[
    	   "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
    	]);
    }


    public function searchCourse(Request $request){
          
         $this->validate(request(),[
          	"search_phrase"=>"required|string"
         ]);

         $courses = Course::where('title','LIKE','%'.request('search_phrase').'%')->orWhere('description','LIKE','%'.request('search_phrase').'%')->paginate(10);

         return view('user-dashboard.courses',[
           "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }

    public function searchCourseByTopic($id){

        $courses = Course::where("topic_id","=",$id)->paginate(10);

         return view('user-dashboard.courses',[
           "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }

    public function searchCourseByInstructor($id){

        $courses = Course::where("instructor_id","=",$id)->paginate(10);

         return view('user-dashboard.courses',[
           "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }


    public function searchCourseBySkillLevel($id){

        $courses = Course::where("skill_level_id","=",$id)->paginate(10);

         return view('user-dashboard.courses',[
           "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }

    public function sortAtoZ(){

        $courses = Course::orderBy("title","asc")->paginate(10);

         return view('user-dashboard.courses',[
           "courses"=>$courses,
           "topics"=>TopicInstructor::listTopics(),
           "instructors"=>TopicInstructor::listInstructors(),
           "skill_levels"=>TopicInstructor::listSkillLevels(),
        ]);

    }

    public function showCourseDetailPage(Course $course){
       
        //get first part of course
        $first_part = CoursePart::where("course_id","=",$course->id)->first();

        return view('user-dashboard.course-detail',compact('course','first_part'));
    }
}
