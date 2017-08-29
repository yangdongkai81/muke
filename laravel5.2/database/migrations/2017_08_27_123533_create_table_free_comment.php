<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFreeComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curriculum_id',11);
            $table->integer('user_id',11);
            $table->string('user_desc',255);
            $table->integer('add_time',11);
            $table->integer('status',2);
            $table->integer('is_name',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('free_comment');
    }
}
