<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file');
            $table->string('alt')->nullable();
            $table->string('hover')->nullable();
            $table->BigInteger('event_id')->unsigned();
            $table->timestamps();

            // foreign
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_images');
    }
}
