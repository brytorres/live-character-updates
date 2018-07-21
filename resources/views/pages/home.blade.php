@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login </a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <section class="container welcome-section">
            <h1 class="title" style="text-align: center;">Live Character Updates</h1>
            <p class="tagline">A character and campaign progress tool for table-top RPG's</p>
        </section>
    </div>
@endsection
