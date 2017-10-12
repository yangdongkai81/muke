<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoughtCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bought_course', function (Blueprint $table) {
            $table->increments('id')->comment('主键自增ID');
            $table->integer('uid')->comment('用户id');
            $table->integer('pid')->comment('课程id');
            $table->string('buy_course',50)->comment('购买课程');
            $table->dateTime('buy_time')->comment('购买时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bought_course');
    }
}
