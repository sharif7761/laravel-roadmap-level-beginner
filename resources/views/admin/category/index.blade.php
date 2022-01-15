@extends('admin.layouts.admin_layout')

@section('content')
<div class="container">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
        Add Category
    </button>
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
    </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
