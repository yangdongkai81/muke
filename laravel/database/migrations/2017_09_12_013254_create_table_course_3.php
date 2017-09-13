<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCourse3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_3', function (Blueprint $table) {
            $table->integer('id');
            $table->string('course_name')->comment('课程名称');
            $table->string('desc')->comment('课程描述');
            $table->string('img')->comment('图片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_3');
    }
}
