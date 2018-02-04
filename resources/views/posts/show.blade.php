@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%">
  <div class="">
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <hr>
      <a href="{{$post->id}}/edit" class="btn btn-default">Edit</a>

      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'delete')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!! Form::close() !!}
    @endif
  @endif
@endsection
