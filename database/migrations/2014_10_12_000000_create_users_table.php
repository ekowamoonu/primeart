<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token');
            $table->string('phone')->unique();
            $table->boolean('access')->default(0);
            $table->boolean('seen')->default(0); //to help know which signups are new
            $table->string('user_type')->default('student');
            $table->string('profile_picture')->default('avatar.png');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

         //add default users
         $default_users=array(
            array('name'=>'Site Admin','email'=>'admin@gmail.com','password'=>bcrypt('1dontw1nk@pr1meart'),   'token'=>'9483YASZAW', 'phone'=>'+23355555555', 'access'=>'1', 'user_type'=>'admin'),

            array('name'=>'Martin Test','email'=>'student@gmail.com','password'=>bcrypt('teststudent'),   'token'=>'94811YASZAW', 'phone'=>'+2335512345',
                'access'=>'1','user_type'=>'student'),
    
            array('name'=>'Albert Dorgbadzi','email'=>'instructor@gmail.com','password'=>bcrypt('testinstructor'),   'token'=>'948444456SCX','phone'=>'+233554308536','access'=>'1','user_type'=>'instructor'),
            );

          User::insert($default_users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
