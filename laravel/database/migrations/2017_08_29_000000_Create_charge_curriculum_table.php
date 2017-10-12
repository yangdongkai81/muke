<?php
/*
 *   收费课程 表文件
 * */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargeCurriculumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_curriculum', function (Blueprint $table) {
            $table->increments('id')->comment('课程主键自增id');
            $table->string('curriculum_name', 80)->nullable();  //varchar
            $table->integer('Add_time')->comment('添加时间')->nullable();
            $table->tinyInteger('numbers')->comment('课程状态')->default(0);    //default    默认值
            $table->integer('price')->comment('课程金额')->nullable();   //int
            $table->string('desc')->comment('课程简介')->nullable();
            $table->char('Leve', 10)->comment('课程难度')->nullable();
            $table->integer('Sales_volume')->comment('课程销量')->nullable();
            $table->float('score')->comment('综合评分')->nullable();
            $table->string('Type_name', 20)->nullable()->comment('分类名称');  //varchar
            $table->string('Direction_name', 20)->nullable()->comment('方向名称');  //varchar
            $table->string('Img_path', 20)->nullable()->comment('图片名字');  //varchar
            $table->integer('Admin_id')->comment('所属老师id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('charge_curriculum');
    }
}
