<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',20);
            $table->char('pwd',32);
            $table->tinyInteger('status')->default(0);
<<<<<<< HEAD
            $table->string('addtime',30);
=======
            $table->string('add_time',30);
>>>>>>> b1c5c8df491d197e2ebe8c93de103ca3a83ca3af
            $table->string('end_time',30);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
