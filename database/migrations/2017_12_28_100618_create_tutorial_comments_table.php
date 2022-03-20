<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutorial_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->text('body');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('tutorial_id')->references('id')->on('tutorials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorial_comments');
    }
}
