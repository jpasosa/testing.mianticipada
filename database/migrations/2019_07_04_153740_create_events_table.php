<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table)
        {
            $table->BigIncrements('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->boolean('public')->default(true);
            $table->boolean('active')->default(true);
            $table->date('date');
            $table->string('duration')->default('2h');
            $table->enum('type', ['teatro', 'recital', 'workshop', 'otros'])->default('recital');
            $table->BigInteger('place_id')->unsigned();
            $table->boolean('adultonly')->default(true);
            $table->string('image')->nullable();                // imagen principal
            $table->string('banner')->nullable();   // si va un banner preparado el nombre del archivo
            $table->integer('restquant')->default(100);
            $table->integer('totalquant')->default(100);
            $table->BigInteger('usercreate_id')->unsigned();
            $table->BigInteger('usercoord_id')->unsigned();
            $table->BigInteger('userzone_id')->unsigned();
            $table->string('fb_general')->nullable();
            $table->string('fb_event')->nullable();
            $table->string('inst_general')->nullable();
            $table->string('inst_event')->nullable();
            $table->timestamps();

            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('usercreate_id')->references('id')->on('users');
            $table->foreign('usercoord_id')->references('id')->on('users');
            $table->foreign('userzone_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
