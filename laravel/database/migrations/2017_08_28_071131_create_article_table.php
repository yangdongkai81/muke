<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            
            $table->increments('id')->comment('文章ID');
            $table->integer('user_id')->comment('用户ID');
            $table->string('title',50)->comment('文章标题');
            $table->string('content',5000)->comment('文章内容');
            $table->string('img_path',50)->comment('封面图片');
            $table->tinyInteger('tag_id')->comment('标签ID');
            $table->integer('browser')->default(0)->comment('浏览量');
            $table->integer('add_time')->comment('发布时间');
            $table->integer('comments_num')->default(0)->comment('评论数');
            $table->integer('collection_num')->default(0)->comment('推荐数');
            $table->tinyInteger('is_original')->comment('是否原创 0非原创 1原创');
            $table->tinyInteger('status')->comment('发布状态 0后台审核中 1审核通过 2审核不通过');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
    }
}
