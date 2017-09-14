<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orderinfo', function (Blueprint $table) {
            $table->increments('id')->comment('订单主键自增ID');
            $table->char('oid',10)->comment('订单编号');
            $table->integer('userid')->comment('用户编号');
            $table->integer('pid')->comment('课程编号');
            $table->string('img',50)->comment('图');
            $table->string('coursename',50)->comment('课程');
            $table->dateTime('orderdate')->comment('下单时间');
            $table->string('total',20)->comment('课程总价格');
            $table->string('orderstatus',20)->comment('订单状态');
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
        Schema::drop('orderinfo');
    }
}
