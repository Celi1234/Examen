<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('age');
            $table->string('gender');
            $table->integer('id_routes')->unsigned();
            $table->foreign('id_routes')->references('id')->
            on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_buses')->unsigned();
            $table->foreign('id_buses')->references('id')->
            on('buses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('drivers');
    }
}
