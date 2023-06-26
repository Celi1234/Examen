<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportagencysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportagencys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('direction');
            $table->string('type_of_transport');
            $table->integer('id_agents')->unsigned();
            $table->foreign('id_agents')->references('id')->
            on('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_buses')->unsigned();
            $table->foreign('id_buses')->references('id')->
            on('buses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_drivers')->unsigned();
            $table->foreign('id_drivers')->references('id')->
            on('drivers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_ticketagents')->unsigned();
            $table->foreign('id_ticketagents')->references('id')->
            on('ticketagents')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transportagencys');
    }
}
