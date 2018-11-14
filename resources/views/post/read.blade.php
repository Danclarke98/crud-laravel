@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>View Post<h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title: </strong> {{ $post -> title }}

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Contents: <br></strong> {{ $post -> content }}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{ route('post.index') }}" class="btn btn-sm btn-success">Return</a>
            </div>
        </div>
    </div>
@endsection
