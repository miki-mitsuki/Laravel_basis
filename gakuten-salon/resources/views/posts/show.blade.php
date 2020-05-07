@extends('layouts')

@section('content')

    <div class="container mt-4">
        
        <div class="card mt-4">
            <div class="card-header mb-2">
                {{ $post->title }}
            </div>
            
            <div class="card-body">
                <p class="card-text">
                     {{ $post->body }}
                </p>
            </div>
            
            <div class="card-footer">
                <div class"mr-2">
                    投稿日時 {{ $post->created_at }}
                </div>
            </div>
        </div>
        <div class="mt-4 text-right">
            <a href="{{route('posts.edit',['post' => $post])}}" class="btn btn-primary">
                編集
            </a>
            <form style="display:inline-block;" method="POST" action="{{route('posts.destroy',['post' => $post])}}">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button class="btn btn-danger">削除</button>
            </form>
        </div>
    </div>

@endsection('content')