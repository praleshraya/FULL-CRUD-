@extends('posts.layout')

@section('grab')

    <div class="container-fluid">
        <h1>Update a Post</h1>
        @if($errors->all())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif


        @if(session()->has('message'))
           <div class="alert alert-success">
               {{session()->get('message')}}
           </div>
            @endif

        <form action="{{route('posts.update',$post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">Description:</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">Update Post</button>
            </div>
        </form>
    </div>
@endsection