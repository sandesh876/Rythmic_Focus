@extends('layouts.profile')

@section('content')
<div class="container mt-3 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center display-5">Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   
                 <div class="card card_posts  bg-dark mb-3 mt-3">
                          <h4 class="card-title text-center text-white">{{$post->post_title}}</h4>
                           <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image ">
                             <div class="card-body ">
                             <p class="card-text text-white">{{$post->post_message}}</p>
                                <div class="card-footer mt-3">
                                   
                                    <p class="card-link text-muted">Posted By: {{$post->username}} <br>Posted at: {{$post->created_at}}</p>
                                <a class="btn btn-outline-secondary btn-sm" href="{{route('home')}}">Back</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
