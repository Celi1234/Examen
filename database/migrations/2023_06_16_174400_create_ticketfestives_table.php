<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketfestivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketfestives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transport_document');
            $table->string('destination_name');
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('entry_time');
            $table->string('type_of_holiday');
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
        Schema::dropIfExists('ticketfestives');
    }
}
