<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntary', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('dni');
            $table->string('specialidad');
            $table->string('foto');
            $table->string('dni_scan');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('campains_id')->unsigned();

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
        Schema::dropIfExists('voluntary');
    }
}
