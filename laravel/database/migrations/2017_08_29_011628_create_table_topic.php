<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->increments('id')->comment("主键id");
            $table->string('desc',255)->comment("试题描述");
            $table->integer('course_id')->comment("所属课程id");
            $table->integer('type_id')->comment("所属类型id");
            $table->tinyInteger('status')->comment("状态  0 正常  1异常");
            $table->tinyInteger('enterprise')->comment("是否企业试题  0 是 1不是");
            $table->string('option',500)->comment("题目选项");
            $table->tinyInteger('topic_type')->comment("题目类型 0单选 1多选 2判断");
            $table->string('correct',10)->comment("正确选项");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('topic');
    }
}
