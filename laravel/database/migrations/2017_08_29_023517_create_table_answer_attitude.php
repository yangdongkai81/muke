<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnswerAttitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_attitude', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('answer_id')->comment('回答id');
            $table->integer('favor')->comment('点赞数');
            $table->integer('oppose')->comment('反对数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer_attitude');
    }
}
