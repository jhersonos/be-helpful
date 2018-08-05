<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaryTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentary_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commentarys_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->timestamps();


            $table->foreign('commentarys_id')->references('id')->on('commentary')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('tags_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentary_tags');
    }
}
