@extends('layouts.app')

@section('content')
<div class="row container">
    <div class="col-md-6">
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{  url('show') }}" class="stretched-link"></a>
            </div>
       </div>
    </div>
    <div class="col-md-6">
        <div class="card">  
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{  url('show') }}" class="stretched-link"></a>
            </div>
       </div>
    </div>
</div>
@endsection
