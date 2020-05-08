<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LastMigr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->datetime('start_time')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });

        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('address')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });

        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('attendees')->nullable();

            $table->datetime('start_time')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
        
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedInteger('venue_id')->nullable();

            $table->foreign('venue_id', 'venue_fk_598776')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
