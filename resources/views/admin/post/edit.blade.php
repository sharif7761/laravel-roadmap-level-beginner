@extends('admin.layouts.admin_layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Post</h5>
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $post->title) }}">
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle', $post->subtitle) }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" >{{ old('body', $post->body) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="status">Publish</label>
                    <input type="checkbox" name="status" id="status" @if($post->status == 1) checked @endif>
                </div>
                <div class="form-group">
                    <label for="tagSelection">Tags</label>
                    <select name="tags[]" id="tagSelection" class="form-control">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"> {{$tag->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cateSelection">Categories</label>
                    <select name="categories[]" id="cateSelection" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tagSelection').select2({
                multiple: true
            });
            $('#cateSelection').select2({
                multiple: true
            });
        });
    </script>
@endpush
