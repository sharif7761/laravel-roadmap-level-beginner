@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $post->title }}</p>
                        <a href="{{ route('blogPost', $post->slug) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
