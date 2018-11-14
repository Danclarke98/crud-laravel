@extends('layouts.app')
@section('content')
<div class='container'>
    <div class= "row">
        <div class="col-lg-12">
            <h3>Edit an existing post</h3>
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
        <form action="{{ route('post.update', $post -> id) }}" method="post">
            {{-- Authentication --}}
            @csrf

            @method('PUT')

            {{-- order page in grid layout and title/text input boxes --}}
        <div class="row">
            <div class="col-md-6">
                <strong>
                    Title
                </strong>
                <input type="text" name="title" class="form-control"  value="{{ $post -> title }}">
            </div>

            <div class="col-md-10">
                    <strong>
                        Content
                    </strong>
                    <textarea class="form-control" placeholder="Make changes now" name="content"  cols="100" rows="25">{{ $post -> content }}</textarea>
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