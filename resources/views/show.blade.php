@extends('layout')

@section('title')
    Show
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/{{$image->image}}" alt="" width="200" height="200">
            </div>
        </div>
        <a class="btn btn-primary" href="show/{{$image->id}}" role="button">Show</a>
    </div>
@endsection
