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
            $table->string('topic_title',60)->comment("话题名称");
            $table->string('topic_introduce')->comment("话题简介");
            $table->integer('topic_guest')->comment("话题嘉宾");
            $table->integer('topic_time')->comment("话题创建时间");
            $table->tinyInteger('topic_start')->comment("话题审核（0通过，1未通过）");
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
