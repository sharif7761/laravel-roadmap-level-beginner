@extends('admin.layouts.admin_layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Tag</h5>
            <form action="{{ route('tag.update', $tag->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $tag->name) }}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $tag->slug) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
