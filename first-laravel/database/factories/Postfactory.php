<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => 'Lv.1',           //実際に入れたい値を記述する。
        'body' => '初めてのlaravel',
    ];
});
