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
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                  <option hidden>Select a category</option>
                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
              <h6>Tags</h6>
              <div class="form-check form-check-inline">
                @foreach ($tags as $tag)
                    <input id="tag-{{$tag->id}}" class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}">
                    <label for="tag-{{$tag->id}}" class="form-check-label mr-3">{{ $tag->name }}</label>
                @endforeach
              </div>
            </div>
            <input type="submit" value="Insert new post" class="my-3">
        </form>
    </div>
@endsection