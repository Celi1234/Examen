<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->integer('id_travelers')->unsigned();
            $table->foreign('id_travelers')->references('id')->
            on('travelers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_agents')->unsigned();
            $table->foreign('id_agents')->references('id')->
            on('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_routes')->unsigned();
            $table->foreign('id_routes')->references('id')->
            on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_tourguides')->unsigned();
            $table->foreign('id_tourguides')->references('id')->
            on('tourguides')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_buses')->unsigned();
            $table->foreign('id_buses')->references('id')->
            on('buses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_offers')->unsigned();
            $table->foreign('id_offers')->references('id')->
            on('offers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_marks')->unsigned();
            $table->foreign('id_marks')->references('id')->
            on('marks')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_drivers')->unsigned();
            $table->foreign('id_drivers')->references('id')->
            on('drivers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('campaigns');
    }
}
