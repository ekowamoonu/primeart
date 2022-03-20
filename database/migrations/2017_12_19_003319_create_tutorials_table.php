<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->integer('skill_level_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('duration');
            $table->string('source_file');
            $table->timestamp('release_date')->useCurrent();
            $table->timestamp('updated_date')->useCurrent();
            $table->foreign('instructor_id')->references('id')->on('users');
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('skill_level_id')->references('id')->on('skill_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorials');
    }
}
