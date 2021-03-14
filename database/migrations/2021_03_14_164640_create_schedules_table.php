<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ambient')->unsigned();
            $table->foreign('ambient')->references('id')->on('ambients')->onDelete('cascade');
            $table->bigInteger('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('subject')->unsigned();
            $table->foreign('subject')->references('id')->on('subjects')->onDelete('cascade');
            $table->bigInteger('professor')->unsigned();
            $table->foreign('professor')->references('id')->on('peoples')->onDelete('cascade');
            $table->bigInteger('reason')->unsigned();
            $table->foreign('reason')->references('id')->on('reasons')->onDelete('cascade');
            
            $table->time('started_time');
            $table->time('finished_time');
            $table->date('date');
            $table->tinyInteger('status')->default(1);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
