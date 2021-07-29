@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{$post->title}}</td>
                        <td>
                            @if ($post->category)
                                {{ $post->category->name }}
                            @else
                                None
                            @endif
                        </td>
                        <td>
                            @if ($post->tags)
                                @foreach($post->tags as $tag)
                                    <small>{{ $tag->name }}</small>
                                @endforeach
                            @else
                                None
                            @endif
                        </td>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}"><button class="btn btn-primary">SHOW</button></a></td>
                        <td><a href="{{ route('admin.posts.edit', $post->id) }}"><button class="btn btn-warning">EDIT</button></a></td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.posts.create') }}"><button class="btn btn-success mt-5">ADD NEW POST</button></a>
    </div>
@endsection