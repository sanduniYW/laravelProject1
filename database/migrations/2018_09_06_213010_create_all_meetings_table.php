<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_meetings', function (Blueprint $table) {
            $table->increments('meetingNo');
            $table->date('agreedDate');
            $table->time('agreedTime');
            $table->date('convinientDate');
            $table->time('convinientTime');
            $table->string('type');

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
        Schema::dropIfExists('all_meetings');
    }
}
