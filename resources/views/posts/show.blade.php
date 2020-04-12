@extends('layouts.app')

@section('content')
       <a href="/posts" class="btn btn-default"> Go back </a>
       <h1>{{ $post->title }} </h1>
       <div>{!! $post->body !!} </div>
       <p> </p>
       <small>Written on {{ $post->created_at }} </small>
       <p> </p>
       <p> </p>
       <a href="/posts/{{ $post->id }}/edit">Edit Post </a>
       <p> </p>
       <p> </p>
       {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST',]) !!}
          {{ Form::hidden('_method','DELETE') }}
          {{ Form::submit('Delete') }}
       {!! Form::close() !!}
@endsection
