@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="display-6 text-center">Create Post</h4>
        <form action="/home" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="post_title" placeholder="Your Subject" id="post_title">
            </div>
            <div class="form-group">
              <textarea name="post_message" id="post_message"  rows="7" class="form-control" placeholder="what's on your mind?"></textarea>
            </div>
            {{-- <div class="input-group  mt-2 mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">Background</button>
                  </div>
                  
                <select name="post_background" class="custom-select" id="post_background">
                  <option selected>None</option>
                  <option id="red" value="red">Red</option>
                  <option id="green" value="green">Green</option>
                  <option id="blue" value="blue">Blue</option>
                </select> 
              </div> --}}
              <div class="form-group">
                <label for="img">Select Image</label>
                <br>
                <input type="file" name="cover_image">
              </div>
              <div class="form-group">
               <button class="btn btn-success" type="submit">Create</button>
              </div>
        </form>
    </div>
@endsection