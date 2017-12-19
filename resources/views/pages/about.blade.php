
@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    @if(count($electives) > 0)
        <ul class="list-group">
            @foreach($electives as $elective)
                <li class="list-group-item">{{$elective}}</li>
            @endforeach
        </ul>
    @endif

    Dynamic data: {{$title}}
@endsection
