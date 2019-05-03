@extends('posts.layout')

@section('grab')

    <div class="container-fluid">
        <h1>Add a Post</h1>
        @if($errors->all())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif


        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Description:</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">Add Post</button>
            </div>
        </form>
    </div>
    @endsection