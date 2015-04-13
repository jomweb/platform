<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('username');
            $table->text('description');
            $table->string('avatar');
            $table->string('employment');
            $table->string('job_title');
            $table->string('location');

            $table->string('availability');

            $table->timestamps();

            $table->unique('user_id');
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('user_profile');
    }
}
