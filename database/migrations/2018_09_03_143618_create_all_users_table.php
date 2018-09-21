<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_users', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('nameWithInitials');
            $table->string('callingName');
            $table->string('email')->unique();
            $table->string('NIC')->unique();
            $table->integer('contactNo');
            $table->string('password');
            $table->string('type');
           
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
        Schema::dropIfExists('all_users');
    }
}
