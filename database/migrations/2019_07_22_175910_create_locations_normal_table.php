<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsNormalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations_normal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->float('price')->default(0.00);
            $table->float('serviceprice')->default(0.00);
            $table->integer('restquant')->default(100);
            $table->integer('totalquant')->default(100);
            $table->BigInteger('event_id')->unsigned();
            $table->string('activeimage')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('locations_normal');
    }
}
