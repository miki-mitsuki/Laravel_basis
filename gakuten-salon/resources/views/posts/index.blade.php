@extends('layouts')

@section('content')

    <div class="container mt-4">
             @foreach($posts as $post)
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
                        投稿日時
                    </div>
                </div>
            </div>
            @endforeach($posts as $post)
    </div>

@endsection('content')