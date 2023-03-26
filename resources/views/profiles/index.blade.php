@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
    <img src="https://picsum.photos/200" class="rounded-circle" alt="dp"> 
    </div>
     <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
         <h1>{{$user->username}}</h1>

         <a href="/p/create">Add New Post</a>
      
      </div>
 
        <div class="d-flex">
            <div><strong>{{$user->posts->count()}}</strong> posts</div>
            <div class="ps-3"><strong>12k</strong> followers</div>
            <div class="ps-3"><strong>3k</strong> following</div>
        </div>

        <div class="pt-3 fw-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
        <div><a href="{{$user->profile->url}}">Idee.dev</a></div>
     </div>

     <div class="row pt-5">

      @foreach($user->posts as $post)
         <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
         </div>
      @endforeach
     </div>
</div>
@endsection
    