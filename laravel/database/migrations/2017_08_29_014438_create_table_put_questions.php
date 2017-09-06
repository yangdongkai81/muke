<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePutQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('put_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id');
            $table->integer('tipic_id')->comment('话题id（0单独提问，话题下问题）');
            $table->integer('questions_type')->comment('问题类型id');
            $table->string('questions_title',80)->comment('问题标题');
            $table->string('questions_img',80)->comment('图片');
            $table->string('questions_introduce')->comment('问题详情');
            $table->integer('questions_attitude')->comment('问题看法：赞同反对');
            $table->integer('questions_time')->comment('提问时间');
            $table->tinyInteger('questions_statrt')->comment('问题状态（0没被回复过，1被回复过）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('put_questions');
    }
}
