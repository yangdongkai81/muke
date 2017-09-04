<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFreeCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name',30);
            $table->integer('study');
            $table->float('score');
            $table->integer('admin_id');
            $table->string('desc',255);
            $table->string('leve',10);
            $table->integer('classification');
            $table->integer('direction');
            $table->integer('type');
            $table->string('img',100);
            $table->integer('price');
            $table->integer('is_show');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('free_course');
    }
}
