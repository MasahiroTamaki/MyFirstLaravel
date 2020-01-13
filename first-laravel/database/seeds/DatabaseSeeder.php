<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //実際に"sedder"で呼び出されるクラス
    {
         $this->call(PostsTableSeeder::class); //PostsTableSeederクラスを呼び出す。
    }
}
