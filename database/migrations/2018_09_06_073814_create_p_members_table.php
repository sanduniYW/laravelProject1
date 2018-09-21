<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_members', function (Blueprint $table) {
            $table->increments('pMemberId');
            $table->string('addNo');
            $table->string('addStreet');
            $table->string('addCity');
            $table->string('intentToJoin');
            $table->integer('noOfFamilyMember');
            $table->boolean('isFinalize')->default(0);

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
        Schema::dropIfExists('p_members');
    }
}
