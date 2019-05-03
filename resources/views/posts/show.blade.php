@extends('posts.layout')

@section('grab')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>Showing Item : {{$post->id}}</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('posts.index')}}" class="btn btn-info">BACK</a>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                Title : {{$post->title}}

            </div>
            <div class="col-md-12">
                Content : {{$post->content}}
            </div>
        </div>
    </div>
    @endsection