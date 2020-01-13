@extends('layouts') {{--'layouts'を継承--}}

@section('content') {{--endsectionまでの処理を'content'に格納。今回は投稿カード。--}}

    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>
            <form method="POST" action="{{route('posts.update', ['post' => $post])}}"> {{--updateメソッドに飛ばす。元のpostのデータを渡す。--}}
                {{csrf_field()}} {{--CSRF対策--}}
                {{ method_field('PUT') }} {{--laravelではPUTであることを記述する。--}}
                
                <fieldset class="mb4"> {{--フォームをグループ化する。--}}
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input 
                            id="title"
                            name="title"
                            class="form-control"
                            value={{ $post->title }} //入力欄に元のデータを表示
                            type="text"
                            >
                    </div>
                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>
                        
                        <textarea
                            id="body"
                            name="body"
                            class="form-control"
                            rows="4"
                        >{{ $post->body }} //入力欄に元のデータを表示
                        </textarea>
                        
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{route('posts.show', ['post' => $post])}}""> {{--show(詳細画面)へ戻る。--}}
                            キャンセル
                        </a>
                        <button class="btn btn-primary" type="submit">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
@endsection('content')