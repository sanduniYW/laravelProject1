<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_events', function (Blueprint $table) {
            $table->increments('eventId');
            $table->string('name');
            $table->string('region');
            $table->date('startDate');
            $table->time('startTime');
            $table->integer('budget');
            $table->text('reason');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('userId')->on('all_users');

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
        Schema::dropIfExists('all_events');
    }
}
