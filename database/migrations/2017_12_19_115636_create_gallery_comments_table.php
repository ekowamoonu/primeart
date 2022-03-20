<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commenter_id')->unsigned();
            $table->integer('gallery_image_id')->unsigned();
            $table->text('body');
            $table->timestamps();
            $table->foreign('gallery_image_id')->references('id')->on('galleries');
            $table->foreign('commenter_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_comments');
    }
}
