<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambients', function (Blueprint $table) {
            $table->id();
            $table->text('terms');
            $table->string('name',45);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('ambient_type')->unsigned();
            $table->timestamps();

            $table->foreign('ambient_type')->references('id')->on('ambient_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambients');
    }
}
