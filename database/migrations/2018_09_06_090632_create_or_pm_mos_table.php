<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrPmMosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('or_pm_mos', function (Blueprint $table) {
            $table->increments('orPmMoId');

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
        Schema::dropIfExists('or_pm_mos');
    }
}
