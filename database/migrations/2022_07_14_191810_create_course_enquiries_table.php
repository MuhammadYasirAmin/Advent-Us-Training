<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('Lead_Name');
            $table->string('Lead_Email');
            $table->bigInteger('Lead_Phone');
            $table->string('Lead_Company');
            $table->bigInteger('Company_Phone');
            $table->string('Company_Designation');
            $table->string('Lead_Message');
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
        Schema::dropIfExists('course_enquiries');
    }
}
