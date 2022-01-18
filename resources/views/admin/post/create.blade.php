@extends('admin.layouts.admin_layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Post</h5>
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" >{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="status">Publish</label>
                    <input type="checkbox" name="status" id="status">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
