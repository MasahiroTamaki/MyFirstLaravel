<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//PostsControllerのindexメソッドに処理を割り振る。
//nameを付けておくと'top'にアクセスと記述しても同じルーティンを得られる。
Route::get('/', 'PostsController@index')->name('top');

//決まったメソッド名を使用する場合"Route::resource"で実行できる。
//'posts'のURLで'PopstsController'に飛ばす。'create'と'show'を実行。 
Route::resource('posts', 'PostsController', ['only'=>['create', 'store', 'show', 'edit', 'update', 'destroy']]);