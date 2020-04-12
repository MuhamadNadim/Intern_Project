@extends('layouts.app')

@section('content')
   <h1> Edit Post </h1>

   {!! Form::open(['action'=>['PostsController@update', $post->id],'method'=>'POST']) !!}
   <div>
    {{ Form::label('title','Title') }}
    {{ Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title']) }}
   </div>
   <p> </p>
   <p> </p>
   <div>
    {{ Form::label('body','Body') }}
    {{ Form::textarea('body',$post->body,['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
   </div>
   <p> </p>
   <p> </p>
   {{ Form::hidden('_method','PUT') }}
   {{ Form::submit('Submit') }}
   {!! Form::close() !!}

@endsection
