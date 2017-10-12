<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeopleintegral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peopleintegral', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name')->comment('商品名称');
           $table->string('logo')->comment('图片');
           $table->string('classification')->comment('分类');
           $table->integer('integral')->comment('商品积分');
           $table->dateTime('time')->comment('添加时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peopleintegral');
    }
}
