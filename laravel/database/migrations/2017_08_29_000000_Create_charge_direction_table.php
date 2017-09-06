<?php
/*
 *   收费课程 表文件
 * */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargeDirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_direction', function (Blueprint $table) {
            $table->increments('id')->comment('方向主键自增id');
            $table->string('Direction_name', 20)->comment('方向名称')->nullable();  //varchar
            $table->tinyInteger('Status')->comment('方向状态(0正常状态/1异常状态)')->nullable()->default(0);     //tinyint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('charge_direction');
    }
}
