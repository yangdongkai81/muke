<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('answer_user_id')->comment('回答问题用户id');
            $table->integer('questions_id')->comment('问题id');
            $table->string('answer_content')->comment('回答内容');
            $table->integer('answer_time')->comment('回答时间');
            $table->tinyInteger('answer_start')->comment('回复状态（0没有回复，1回复）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer');
    }
}
