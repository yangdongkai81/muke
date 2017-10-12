<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFreeConsultaion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_consultaion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title',50);
            $table->string('reply',255);
            $table->integer('admin_id');
            $table->integer('add_time');
            $table->integer('reply_time');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('free_consultaion');
    }
}
