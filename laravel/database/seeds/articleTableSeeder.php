<?php

use Illuminate\Database\Seeder;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $result = [];
        for($i = 0; $i<50000; $i++){
            $result[] = ['user_id'=>1,'title'=>'我很生气'.$i];
        }
       DB::table('article')->insert($result);
    }
}
