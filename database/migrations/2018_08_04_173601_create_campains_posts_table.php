<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampainsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campains_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campains_id')->unsigned();
            $table->text('texto');
            $table->string('image');

            $table->timestamps();

            $table->foreign('campains_id')->references('id')->on('campains')
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
        Schema::dropIfExists('campains_posts');
    }
}
