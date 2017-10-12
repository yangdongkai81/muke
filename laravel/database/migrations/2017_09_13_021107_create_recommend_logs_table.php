<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommend_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->comment('文章ID');
            $table->integer('add_time')->comment('添加时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recommend_logs');
    }
}
