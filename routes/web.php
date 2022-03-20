<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*basic site navigation*/
Route::get('/', "GeneralController@index")->name('login')->middleware('guest');
Route::get('/index', "GeneralController@index")->name('login')->middleware('guest');
Route::get('/home', "GeneralController@index")->name('login')->middleware('guest');
Route::get('/login', "GeneralController@index")->name('login')->middleware('guest');
Route::get('/register', "Auth\RegisterController@showRegisterPage");
Route::get('/payment', "GeneralController@payment")->middleware('guest','checkregistration');
Route::get('/success', "GeneralController@success")->middleware('checkregistration');
Route::get('/errors', "GeneralController@errors")->middleware('guest','checkregistration');
Route::get('/password-reset', "GeneralController@passwordReset")->middleware('guest');

/*user dashboard*/
Route::middleware(['auth'])->group(function(){
	Route::get('/welcome',"UserController@showWelcomePage");
	Route::get('/production-resources',"UserController@showProductionResourcesPage");
	Route::get('/courses',"CourseController@showCoursesPage");
	Route::get('/course-detail/{course}',"CourseController@showCourseDetailPage");
	Route::get('/tutorials',"TutorialController@showTutorialsPage");
	Route::get('/tutorial-detail/{tutorial}',"TutorialController@showTutorialDetailPage");
	Route::get('/forums',"UserController@showForumsMainPage");
	Route::get('/my-account',"UserController@showMyAccountPage");

	/*user tutorial actions*/
	Route::get('/search-tutorial',"TutorialController@searchTutorial");
	Route::get('/tutorials/by-topic/{id}',"TutorialController@searchTutorialByTopic");
	Route::get('/tutorials/by-instructor/{id}',"TutorialController@searchTutorialByInstructor");
	Route::get('/tutorials/by-skill-level/{id}',"TutorialController@searchTutorialBySkillLevel");
	Route::get('/tutorials/sort-a-to-z',"TutorialController@sortAtoZ");

	/*user course actions*/
	Route::get('/search-course',"CourseController@searchCourse");
	Route::get('/courses/by-topic/{id}',"CourseController@searchCourseByTopic");
	Route::get('/courses/by-instructor/{id}',"CourseController@searchCourseByInstructor");
	Route::get('/courses/by-skill-level/{id}',"CourseController@searchCourseBySkillLevel");
	Route::get('/courses/sort-a-to-z',"CourseController@sortAtoZ");
});


/*login and logout*/
Route::post('/login', "Auth\LoginController@login");
Route::get('/logout', "Auth\LoginController@logout");


/*Admin dashboard*/
Route::middleware(['auth'])->group(function(){
Route::get('/admin-main',"AdminController@showAdminMainPage");
Route::get('/upload-new-course-video',"AdminController@showNewCoursePage");
Route::get('/upload-new-tutorial-video',"AdminController@showNewTutorialPage");
Route::get('/courses-management',"AdminController@showCoursesManagementPage");

/*tutorial actions*/ 
Route::post('/new-tutorial',"AdminController@newTutorial");
});


/*gallery*/
Route::get('/gallery',"UserController@showGalleryPage");


/*registration*/
Route::post('/register-new-user',"Auth\RegisterController@register");

/*make payment*/
Route::post('/make-payment',"SubscriptionController@makePayment");
Route::post('/check-transaction-status',"SubscriptionController@checkTransactionStatus");




