<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tour_advantages');
            $table->string('tour_schedule');
            $table->string('phone_number');
            $table->string('ticket_price');
            $table->string('agency_logo');
            $table->integer('id_routes')->unsigned();
            $table->foreign('id_routes')->references('id')->
            on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_tickets')->unsigned();
            $table->foreign('id_tickets')->references('id')->
            on('tickets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('offers');
    }
}
