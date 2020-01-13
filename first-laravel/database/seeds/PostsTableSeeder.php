<?php

use Illuminate\Database\Seeder;
use App\Post; //modelのPostを元にsedderを記述。
//factoryを実行するクラス
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //どの様にfactoryを実行するか。
    {
        factory(Post::class,10) //Postモデルに基づいて10回実行する。
        ->create(); 
    }
}
