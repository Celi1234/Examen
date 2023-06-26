<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourguidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourguides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('guide_type');
            $table->integer('id_travelers')->unsigned();
            $table->foreign('id_travelers')->references('id')->
            on('travelers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_routes')->unsigned();
            $table->foreign('id_routes')->references('id')->
            on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourguides');
    }
}
