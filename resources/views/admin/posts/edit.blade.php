@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Post title</label>
              <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title">
            </div>
            <div class="form-group">
              <label for="content">Post content</label>
              <textarea class="form-control" id="content" rows="3" value="{{ $post->content }}" name="content"></textarea>
            </div>
            <input type="submit" value="Update post">
        </form>
    </div>
@endsection