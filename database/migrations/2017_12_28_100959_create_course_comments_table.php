<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_part_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->text('body');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('course_part_id')->references('id')->on('course_parts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_comments');
    }
}
