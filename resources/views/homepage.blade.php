@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <h1 style="text-align: center;">My Gallery</h1>
    @foreach($images as $image)
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{$image->image}}" alt="" width="200" height="200">
                </div>
            </div>
            <a class="btn btn-success" href="show/{{$image->id}}" role="button">Show</a>
            <a class="btn btn-warning" href="update/{{$image->id}}" role="button">Update</a>
            <a class="btn btn-danger" href="delete/{{$image->id}}" role="button">Delete</a>
        </div>
    @endforeach
@endsection
