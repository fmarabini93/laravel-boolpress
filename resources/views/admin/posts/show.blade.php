@extends('layouts.app')

@section('content')
    <div class="container text-center show">
        <div>
            <h2 class="mb-5">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection