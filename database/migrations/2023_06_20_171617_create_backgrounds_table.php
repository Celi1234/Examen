<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('identification');
            $table->string('age');
            $table->string('gender');
            $table->integer('id_travelers')->unsigned();
            $table->foreign('id_travelers')->references('id')->
            on('travelers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('backgrounds');
    }
}
