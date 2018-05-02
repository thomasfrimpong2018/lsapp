@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<div align="center">
<h1>{{$post->title}}</h1>

<img align="center" style="float:center;" width="100%" height="300px" src="/storage/cover_image/{{$post->cover_image}}">

<p>
    {!!$post->body!!}

</p>
</div>


<hr>
<small>{{$post->created_at}} by {{$post->user->name}}</small>
<hr>
    @if(!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
      <a href="{{$post->id}}/edit" class="btn btn-primary">Edit</a>
      {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
      @endif
    @endif
  @endsection