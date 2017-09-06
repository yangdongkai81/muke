<?php
/*
 *   收费课程 表文件
 * */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_type', function (Blueprint $table) {
            $table->increments('id')->comment('分类主键自增id');
            $table->string('Type_name', 20)->comment('分类名称')->nullable();  //varchar
            $table->tinyInteger('Status')->comment('分类状态(0正常状态/1异常状态)')->nullable()->default(0);     //tinyint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('charge_type');
    }
}
