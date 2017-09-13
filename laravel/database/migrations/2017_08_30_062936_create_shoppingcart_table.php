<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shoppingcart', function (Blueprint $table) {
            $table->increments('sid')->comment('购物车主键自增ID');
            $table->integer('pid')->comment('课程编号');
            $table->string('price',20)->comment('课程价格');
            $table->integer('userid')->comment('用户编号');
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
        Schema::drop('shoppingcart');
    }
}
