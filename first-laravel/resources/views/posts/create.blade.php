@extends('layouts') {{--'layouts'を継承--}}

@section('content') {{--endsectionまでの処理を'content'に格納。今回は投稿カード。--}}

    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>
            <form method="POST" action="{{route('posts.store')}}"> {{--storeメソッドに飛ばす--}}
                {{csrf_field()}} {{--CSRF対策--}}
                <fieldset class="mb4"> {{--フォームをグループ化する。--}}
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input 
                            id="title"
                            name="title"
                            class="form-control"
                            value="{{old('title')}}" {{--警告文を出すとき入力済の値を保持する。--}}
                            type="text"
                            >
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>
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
                        >{{old('body')}} {{--警告文を出すとき入力済の値を保持する。--}}
                        </textarea>
                        <div class="text-danger"> {{--エラー文字赤--}}
                            {{$errors->first('body')}} {{--バリデーションエラー 空でsubmitするとエラー表示。 Contorllerのstoreメソッドでvalidateを記述することでエラーを自動で生成する--}}
                        </div>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{route('top')}}"> {{--index(一覧画面)へ戻る。--}}
                            キャンセル
                        </a>
                        <button class="btn btn-primary" type="submit">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
@endsection('content')