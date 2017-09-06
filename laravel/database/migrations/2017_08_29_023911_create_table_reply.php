<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('answer_id')->comment("回答id");;
            $table->integer('questions_id')->comment("问题id");
            $table->integer('reply_user_id')->comment("回复用户id");
            $table->string('reply_content')->comment("回复内容");
            $table->integer('reply_time')->comment("回复时间");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reply');
    }
}
