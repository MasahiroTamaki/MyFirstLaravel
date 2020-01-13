<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ //$fillable（代入可能）'title'と'body'のみ書き換えることができる。ホワイトリスト方式。
        'title',            //$guarded（保護）記述した値以外の要素を、create から渡すことができる。ブラックリスト方式。
        'body',
        ];
}
