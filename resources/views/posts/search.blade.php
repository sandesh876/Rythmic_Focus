@extends('layouts.profile')
@section('content')
<div class="container mt-3 mb-2">
@if($user_list->count()>0)
   
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
    @foreach ($user_list ?? '' as $user)
      <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
      <td><a href="{{route('user_profile',['id'=>$user->id])}}"><button class="btn btn-outline-secondary">Visit Profile</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
   

@else
    <p class="alert alert-danger">{{$message ?? 'No user found'}}</p>
  @endif
</div>
  
@endsection