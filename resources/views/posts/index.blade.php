@extends('posts.layout')

@section('grab')


  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <h3>List All Records</h3>
          </div>

      </div>
      </div>

  <div class="container-fluid">

      <div class="row">
          <table class="table-bordered mt-7 w-100">
              <tr>

                  <th>Title</th>
                  <th>Post</th>
                  <th>Action</th>
              </tr>

              @foreach($posts as $post)
              <tr>

                  <td>{{$post->title}}</td>
                  <td>{{$post->content}}</td>
                  <td>
                      <form action="{{route('posts.destroy',$post->id)}}" onsubmit=" return confirm('Are you sure want to delete this post ?')" method="POST">
                          @csrf
                          <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">Show</a>
                          <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          @method('DELETE')
                      </form>
                  </td>
              </tr>
              @endforeach
          </table>

      </div>
  </div>




<div class="mt-4">
    {{$posts->links()}}
</div>

@endsection
