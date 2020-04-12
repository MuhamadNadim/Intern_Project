@extends('layouts.app')

@section('content')
   <h1> Create Post </h1>

   {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
   <div>
    {{ Form::label('title','Title') }}
    {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
   </div>
   <p> </p>
   <p> </p>
   <div>
    {{ Form::label('body','Body') }}
    {{ Form::textarea('body','',['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
   </div>
   <p> </p>
   <p> </p>
   {{ Form::submit('Submit') }}
   {!! Form::close() !!}

@endsection
