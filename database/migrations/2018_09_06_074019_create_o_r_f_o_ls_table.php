<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateORFOLsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_r_f_o_l_s', function (Blueprint $table) {
            $table->increments('ORFOLId');
            $table->string('region');

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
        Schema::dropIfExists('o_r_f_o_l_s');
    }
}
