@extends('layouts.app')

@section('content')
<div class="container row">
    <div class="col-md-12">
        <div class="container card">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
            <h4> {{ $post->title }}</h4>
            <div class="card-body">
                <p class="card-text">{!! $post->description !!}</p>
            </div>
            <a href="#">Like</a>
            <a href="#">Dislike</a>
       </div>
    </div>
@endsection
