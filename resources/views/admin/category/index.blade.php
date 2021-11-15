@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Post</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($posts as $post)
            <tr>
                <td>{{ $post->image }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->post }}</td>
                <td>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
</div>
@endsection
