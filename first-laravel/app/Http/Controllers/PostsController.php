<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //modelのクラスを呼び出す

class PostsController extends Controller
{
    public function index() //indexメソッドがviewを呼び出す。一覧画面。
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5); //Postテーブルの値をcreated_atの順に降順で取得。ページネーションとして5件ずつ表示。
        return view('posts.index', ['posts' => $posts]); //view/posts/index.blade.phpが表示される。上記の$postsをviewに渡す。
    }
    
    public function create() //新規投稿画面。
    {
        return view('posts.create'); //view/posts/create.blade.phpが表示される。
    }
    
    public function store(Request $request) //新規投稿の登録
    {
        $params = $request->validate([ //入力チェック
            'title'=>'required|max:20', //必須で最大20文字
            'body'=>'required|max:140',
            ]);
        Post::create($params);
        return redirect()->route('top');
    }
    
    public function show($post_id) //詳細画面
    {
        $post = Post::findOrFail($post_id);
        return view('posts.show', ['post' => $post]); //view/posts/show.blade.phpが表示される。
    }
    
    public function edit($post_id) //編集画面
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update($post_id, Request $request) //更新
    {
        $params = $request->validate([ //入力チェック
            'title'=>'required|max:20', //必須で最大20文字
            'body'=>'required|max:140',
            ]);
        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();
        
        return redirect()->route('top');
    }
    
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->delete();
        
        return redirect()->route('top');
    }
}
