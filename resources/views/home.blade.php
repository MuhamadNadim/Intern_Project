@extends('layouts.app')

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nadim's Blog
                </div>
                <div class="flex-center">
                <h1> A College Student's Blog </h1>
              </div>

            </div>
        </div>
    </body>
    @endsection

    <!--

    -->
