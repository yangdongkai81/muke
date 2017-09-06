<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePutQuestionsAttitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('put_questions_attitude', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questions_id')->comment('问题id');
            $table->integer('favor')->comment('点赞数');
            $table->integer('oppose')->comment('反对数');
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
        Schema::drop('put_questions_attitude');
    }
}
