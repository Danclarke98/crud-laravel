@extends('layouts.app')
@section('content')
<div class='container'>
    <div class= "row">
        <div class="col-lg-12">
            <h3>New Post</h3>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
           <strong>Oh no!</strong> Something went wrong.<br>
           <ul>
                @foreach ( $errors as $key => $value)
                    <li>{{ $errors }}</li>
                @endforeach

           </ul>
        </div>
    @endif
        <form action="{{ route('post.store') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-12">
                <strong>
                    Title
                </strong>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>

            <div class="col-md-12">
                    <strong>
                        Content
                    </strong>
                    <textarea class="form-control" placeholder="content" name="content" id="" cols="100" rows="10"></textarea>
                </div>
                <div>
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
        </div>
      
                
        </form>
</div>
    
@endsection