@extends('layouts.app')

@section('content')
    <div class="container text-center show">
        <div>
            <h2 class="mb-5">{{ $post->title }}</h2>
            @if ($post->category)
                <h5 class="my-5">{{ $post->category->name }}</h5>
            @else
                <h5 class="my-5">Category not specified</h5>
            @endif
            @if ($post->tags)
                @foreach($post->tags as $tag)
                    <p class="my-5">{{ $tag->name }}</p>
                @endforeach
            @endif
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection