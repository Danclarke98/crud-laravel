@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>All Posts</h3>

            </div>
            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('post.create') }}">Create New Post</a>
            </div>
            
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                    <p>
                      {{ $message }}  
                    </p>
            </div>
            
        @endif


        <table class="table table-hover table-sm">
            <tr>
                <th width = "60px"><b> No.</b></th>
                <th width = "320px">Title </th>
                <th>Contents</th>
                <th width = "180px">Action</th>


            </tr>

            @foreach ( $posts as $post )
            <tr>
                <td><b>{{ ++$i }}</b></td>
                <td>{{ $post -> title}}</td>
                <td>{{ $post -> content}}</td>
                    <td>
                        <form action= "{{ route('post.destroy', $post->id) }}" method= "post">
                        <a class="btn btn-sm btn-success" href= "{{ route('post.show',$post->id) }}"> Read </a>
                        <a class="btn btn-sm btn-warning" href= "{{ route('post.edit',$post->id) }}"> Edit </a>
                            @csrf
                            @method('DELETE')
                            <button type= "submit" class="btn btn-sm btn-danger"> Delete </button>
                        
                        </form>

                    </td>
            </tr>
                
            @endforeach

        </table>
    


    {!! $posts->links() !!}
    </div>
@endsection
