<?php

use Illuminate\Database\Seeder;

class article extends Seeder
{
    /**
     * 运行数据库填充
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            'user_id' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
