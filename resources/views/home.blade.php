@extends('layouts.app')

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
                    
                @if($posts ?? ''->count()>0)
                     @foreach($posts ?? '' as $post)
                        <div class="card card_posts  bg-dark mb-3 mt-3">
                            <h4 class="card-title text-center text-white">{{$post->post_title}}</h4>
                           <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image ">
                             <div class="card-body ">
                             <a href="{{route('show_post',['id' => $post->id])}}" class="btn btn-outline-secondary btn-sm">Read More</a>
                                <div class="card-footer mt-3">
                                    <p class="card-link text-muted">Posted By: {{$post->username}} <br>Posted at: {{$post->created_at}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                @else
                <div>
                 <p class="alert alert-danger">No Posts Found</p>
                </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
