@extends('layouts') {{--'layouts'を継承--}}

@section('content') {{--endsectionまでの処理を'content'に格納。今回は投稿カード。--}}

    <div class="container mt-4">
        
        <div class="card mb-4">
            <div class="card-header mb-2">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{ $post->body }}
                </p>
            </div>
            <div class="card-footer">
                <span　class="mr-2">
                    投稿日時 {{ $post->created_at }}
                </span>
            </div>
        </div>
        <div class="mt-4 text-right">
            <a class="btn btn-primary" href="{{route('posts.edit', ['post' => $post])}}""> {{--show(詳細画面)へ戻る。--}}
                編集
            </a>
            <form 
            style="display: inline-block"
            method="POST"
            action="{{ route('posts.destroy', ["post" => $post]) }}"
            >
                {{csrf_field()}} {{--CSRF対策--}}
                {{ method_field('DELETE') }} {{--laravelではDELETEであることを記述する。--}}
                <button class="btn btn-danger">削除</button>
            </form>
        </div>
    </div>
    
@endsection('content')