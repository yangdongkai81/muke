<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdminAuth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_auth', function (Blueprint $table) {
            $table->increments('auth_id');
            $table->string('auth_name')->comment('权限名称');
            $table->integer('role_id')->comment('角色id');
            $table->string('auth_a')->comment('路由名称');
            $table->integer('auth_level')->comment('分类层级');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin_auth');
    }
}
