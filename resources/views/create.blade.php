@extends('layout')

@section('title')
    Create
@endsection

@section('content')
    <div class="container-sm">
        <form action="/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-content">
                                <div class="form-group">
                                    <input type="file" name="image" id="example-fileinput" class="form-control-file">
                                </div>
                                <button type="submit" class="btn btn-dark">Create</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
