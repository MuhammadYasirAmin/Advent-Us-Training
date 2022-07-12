<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseVenuesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_venues_infos', function (Blueprint $table) {
            $table->id();
            $table->date('Venue_Date');
            $table->string('Venue_Name');
            $table->bigInteger('Venue_Fee');
            $table->bigInteger('CID')->unsigned();
            $table->timestamps();
            $table->foreign('CID')->references('id')->on('course_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_venues_infos');
    }
}
