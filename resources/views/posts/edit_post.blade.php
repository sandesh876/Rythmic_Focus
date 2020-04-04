@extends('layouts.profile')
@section('content')
    <div class="container">
        <h4 class="display-6 text-center">Edit Post</h4>
    <form action="{{route('update_post',['id' => $post->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
            <input type="text" class="form-control" value="{{$post->post_title}}" name="post_title" placeholder="Your Subject" id="post_title">
            </div>
            <div class="form-group">
            <textarea name="post_message" id="post_message"   rows="7" class="form-control" placeholder="what's on your mind?">{{$post->post_message}}</textarea>
            </div>
              <div class="form-group">
                <label for="img">Select Image</label>
                <br>
              <input type="file" value="{{$post->cover_image}}" name="cover_image">
              </div>
              <div class="form-group">
               <button class="btn btn-success" type="submit">Update</button>
              </div>
        </form>
      <a  class="btn btn-outline-secondary" href="{{route('dashboard')}}">Back</a>
    </div>
@endsection