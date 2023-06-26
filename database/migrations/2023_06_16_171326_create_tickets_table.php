<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transport_document');
            $table->string('destination_name');
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('entry_time');
            $table->integer('id_routes')->unsigned();
            $table->foreign('id_routes')->references('id')->
            on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_buses')->unsigned();
            $table->foreign('id_buses')->references('id')->
            on('buses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_travelers')->unsigned();
            $table->foreign('id_travelers')->references('id')->
            on('travelers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
