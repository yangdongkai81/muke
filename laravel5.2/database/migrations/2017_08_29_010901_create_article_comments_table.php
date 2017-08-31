<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments', function (Blueprint $table) {
            
            $table->increments('id')->comment('评论ID');
            $table->integer('user_id')->comment('用户ID');
            $table->integer('art_id')->comment('文章ID');
            $table->string('content',255)->comment('评论内容');
            $table->integer('add_time')->comment('添加时间');
            $table->tinyInteger('status')->default(1)->comment('评论状态 0删除 1正常');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_comments');
    }
}
