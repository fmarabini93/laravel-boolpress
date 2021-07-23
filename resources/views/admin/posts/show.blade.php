@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
@endsection