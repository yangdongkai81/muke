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
            $table->integer('comment_id')->comment('评论ID');
            $table->integer('from_user_id')->comment('回复用户ID');
            $table->integer('to_user_id')->comment('回复對象用户ID');
            $table->string('content',255)->comment('回复内容');
            $table->integer('add_time')->comment('添加时间');
            $table->integer('reply_type')->comment('回复类型 1为回复评论 2为回复评论下回复内容');
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
