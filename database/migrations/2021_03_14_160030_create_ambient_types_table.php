<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambient_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('ambient_type')->unsigned();
            $table->foreign('ambient_type')->references('id')->on('ambient_types')->onDelete('cascade');
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
        Schema::dropIfExists('ambient_types');
    }
}
