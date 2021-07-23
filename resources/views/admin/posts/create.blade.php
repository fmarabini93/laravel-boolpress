@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Post title</label>
              <input type="text" class="form-control" id="title" placeholder="Insert your post title" name="title">
            </div>
            <div class="form-group">
              <label for="content">Post content</label>
              <textarea class="form-control" id="content" rows="3" placeholder="Insert your post content" name="content"></textarea>
            </div>
            <input type="submit" value="Insert new post">
        </form>
    </div>
@endsection