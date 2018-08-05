<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampainsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campains_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campains_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->timestamps();

            $table->foreign('campains_id')->references('id')->on('commentary')
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
        Schema::dropIfExists('campains_tags');
    }
}
