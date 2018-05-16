<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')
                ->references('id')->on('careers')
                ->onDelete('cascade');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
                ->references('id')->on('subjects')
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
        Schema::dropIfExists('career_subject');
    }
}
