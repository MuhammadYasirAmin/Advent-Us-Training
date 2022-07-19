<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Course_Title');
            // $table->bigInteger('Course_Price');
            $table->string('Course_Category');
            $table->bigInteger('Course_Duration');
            $table->text('Course_Description');
            $table->text('Course_Type');
            $table->string('course_Image')->nullable();
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
        Schema::dropIfExists('course_infos');
    }
}
