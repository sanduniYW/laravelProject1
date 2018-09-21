<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInabilitymtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inabilitymts', function (Blueprint $table) {
            $table->increments('inabilityNo');
            $table->string('reason');
            $table->date('alternateDate');
            $table->time('alternateTime');
            $table->string('feedback');

            $table->integer('meeting_no')->unsigned();
            $table->foreign('meeting_no')->references('meetingNo')->on('all_meetings');

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
        Schema::dropIfExists('inabilitymts');
    }
}
