@extends('layouts')

@section('content')

    <div class="container mt-4">
        <div class="mb-4">
            <a href="{{route('posts.create')}}" class="btn btn-primary">
                投稿を新規作成する
            </a>
        </div>
        
        
         @foreach($posts as $post)
        <div class="card mt-4">
            <div class="card-header mb-2">
                {{ $post->title }}
            </div>
            
            <div class="card-body">
                <p class="card-text">
                     {{ $post->body }}
                </p>
                <a class="cord-link" href="{{route('posts.show',['post' => $post])}}">
                    詳細をみる
                </a>
            </div>
            
            <div class="card-footer">
                <div class"mr-2">
                    投稿日時 {{ $post->created_at }}
                </div>
            </div>
        </div>
        @endforeach
        
        <div class="d-flex justify-content-center mb-5">
            {{$posts->links()}}
        </div>
        
    </div>

@endsection('content')