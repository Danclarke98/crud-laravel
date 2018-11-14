@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <h3>You are logged in!</h3>
                        <br>
                        <a href="{{ route('post.index') }}" class="btn btn-sm btn-success">Go to crud application</a>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
