<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registers', function (Blueprint $table) {
            $table->id();
            $table->string('Course_Name');
            $table->string('Course_Date_Venue');
            $table->string('Del_Name');
            $table->string('Del_Designation');
            $table->string('Del_Company');
            $table->string('Del_Address');
            $table->string('Del_Email');
            $table->bigInteger('Del_Phone');
            $table->string('Bil_Salution');
            $table->string('Bil_Name');
            $table->string('Bil_Designation');
            $table->string('Bil_Company');
            $table->string('Bil_Address');
            $table->string('Bil_City');
            $table->string('Bil_Email');
            $table->bigInteger('Lead_Phone');
            $table->bigInteger('Lead_Telephone');
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
        Schema::dropIfExists('course_registers');
    }
}
