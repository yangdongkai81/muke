<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_replies', function (Blueprint $table) {
            $table->increments('id')->comment('回复ID');
            $table->integer('user_id')->comment('用户ID');
            $table->string('content',255)->comment('回复内容');
            $table->integer('add_time')->comment('添加时间');
            $table->tinyInteger('status')->default(1)->comment('回复状态 0删除 1正常');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_replies');
    }
}
