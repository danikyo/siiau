<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id'); //NRC
            $table->string('name'); //example: D04 or D05
            $table->date('start');
            $table->date('end');
            $table->string('time'); //start time and end time
            $table->integer('spaces'); //number of available spaces
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade');
            $table->integer('university_id')->unsigned();
            $table->foreign('university_id')
                ->references('id')->on('universities')
                ->onDelete('cascade');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')
                ->references('id')->on('teachers')
                ->onDelete('cascade');
            $table->integer('classroom_id')->unsigned();
            $table->foreign('classroom_id')
                ->references('id')->on('classrooms')
                ->onDelete('cascade');

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
        Schema::dropIfExists('sections');
    }
}