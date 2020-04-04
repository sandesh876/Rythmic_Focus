@extends('layouts.profile')
@section('content')
<div class="container mt-3 mb-2">
    <div class=" user_details mb-5">
        <div class="row">
            <div class="col-md-5 col-sm-7">
                <div class="userimage" style="height:200px; width:200px; border:2px solid black;">
                <img style="height:199px; width:199px; object-fit:cover:" src="/storage/profile_images/{{$user->user_profile}}" alt="profile images">
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="userinfo">
                    <p class="alert alert-info text-center">UserName: <strong>{{$user->name}}</strong></p>
                    <p>Email: {{$user->email}}</p>
                    </div>
            </div>
        </div>   
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center"><strong>{{$user->name}}</strong> Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @if($posts->count()>0)
                     @foreach($posts as $post)
                        <div class="card card_profile bg-dark nb-3 mt-3">
                            <h4 class="card-title text-center">{{$post->post_title}}</h4>
                            <a href="/home/show"><img class="card-img-top cover" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image "></a>
                             <div class="card-body text-center">
                                <p class="card-text">{{$post->post_message}}</p>
                            <p class="card-text">Created At: {{$post->created_at}}</p>
                            </div>
                        
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('home')}}">Back</a>
                        </div>
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