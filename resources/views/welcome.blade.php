@extends('layout.master')
@section('title', ' Home page')
@section('main-content')
    <h1>My {{ $foo }}First website</h1>

    @foreach($tasks as $task)

       <li>{{ $task }}</li>

    @endforeach

@endsection