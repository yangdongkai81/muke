<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFreeAttr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id');
            $table->string('title',30);
            $table->string('video_path',50);
            $table->tinyInteger('sort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('free_attr');
    }
}
