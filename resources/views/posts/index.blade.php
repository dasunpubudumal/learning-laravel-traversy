@extends('layouts.app')

@section('content')
    <h2>Posts</h2>

    <ul>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                    <small>by {{$post->user->name}}</small>
                </div>
                {{$posts->links()}}
            @endforeach
        @else
            <p>No posts found</p>
        @endif
    </ul>

@endsection