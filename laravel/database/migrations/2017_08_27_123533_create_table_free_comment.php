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
            $table->integer('curriculum_id');
            $table->integer('user_id');
            $table->string('user_desc',255);
            $table->integer('add_time');
            $table->integer('status');
            $table->integer('is_name');
            $table->integer('zhang_id');
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
