@extends('layout')

@section('title')
    Update
@endsection

@section('content')
    <div class="container-sm">
        <form action="/update/{{$image->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <img src="/{{$image->image}}" alt="" width="200" height="200">
                </div>
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-content">
                                <div class="form-group">
                                    <input type="file" name="image" id="example-fileinput" class="form-control-file">
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
