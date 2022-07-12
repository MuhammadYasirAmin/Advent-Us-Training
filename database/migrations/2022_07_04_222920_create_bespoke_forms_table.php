<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBespokeFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bespoke_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Course_Title');
            $table->integer('Course_Duration');
            $table->integer('Course_Participant');
            $table->string('Course_Venue');
            $table->dateTime('Start_Date');
            $table->string('Course_Objective');
            $table->string('Course_Salutation');
            $table->string('Lead_Name');
            $table->string('Lead_Designation');
            $table->string('Lead_Company');
            $table->longText('Lead_Address');
            $table->string('Lead_Country');
            $table->string('Lead_City');
            $table->string('Lead_Email');
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
        Schema::dropIfExists('bespoke_forms');
    }
}
