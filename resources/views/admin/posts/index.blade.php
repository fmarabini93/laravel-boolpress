@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{$post->title}}</td>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}"><button class="btn btn-primary">SHOW</button></a></td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.posts.create') }}"><button class="btn btn-info">ADD NEW POST</button></a>
    </div>
@endsection