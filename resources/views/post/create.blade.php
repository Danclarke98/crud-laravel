@extends('layouts.app')
@section('content')
<div class='container'>
    <div class= "row">
        <div class="col-lg-12">
            <h3>Create a new post</h3>
            <br>

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
            {{-- Authentication --}}
            @csrf
            {{-- order page in grid layout and title/text input boxes --}}
        <div class="row">
            <div class="col-md-6">
                <strong>
                    Title
                </strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title Here">
            </div>

            <div class="col-md-10">
                    <strong>
                        Content
                    </strong>
                    <textarea class="form-control" placeholder="Type your post here" name="content" id="" cols="100" rows="25"></textarea>
                </div>
                <div class="col-md-12">
                    <br>
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
                
        </div>
      
                
        </form>
</div>
    
@endsection