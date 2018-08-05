<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->enum('type', ['don', 'rec', 'vol']);
            $table->text('descripcion')->nullable();
            $table->string('imagen_1')->nullable();
            $table->string('imagen_2')->nullable();
            $table->text('video')->nullable();
            $table->string('meta_don')->nullable();
            $table->integer('n_vol')->nullable();
            $table->string('n_cuenta')->nullable();
            $table->string('direccion')->nullable();

            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')
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
        Schema::dropIfExists('campains');
    }
}
