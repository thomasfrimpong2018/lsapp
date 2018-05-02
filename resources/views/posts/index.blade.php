@extends('layouts.app')

@section('content')

  <h1>Posts</h1>
  @if(count($posts)>0)
   @foreach($posts as $post)
   <div class="well">
     <div class="row">
       <div class="col-md-3 col-sm-4">
       <img style="width:150px;height:150px;border:5px solid grey;border-radius:50%;overflow:hidden !important;" src="/storage/cover_image/{{$post->cover_image}}">
       <br><br>
       </div>
       <div class="col-md-9 col-sm-8">
          <h3><a  href="posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

       </div>

     </div>
   
   </div>

   @endforeach
   {{$posts->links()}}
   @else
   <p>No Posts</p>
  @endif
@endsection