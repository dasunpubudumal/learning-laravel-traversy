@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="container">
        <p>{{$post->body}}</p>
    </div>
    <small>Written on {{$post->created_at}}</small><br>
    <small>Last modified on {{$post->updated_at}}</small>
@endsection