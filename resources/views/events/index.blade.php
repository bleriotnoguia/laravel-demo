@extends('layouts.master');

@section('title', 'Events')

@section('content')
    <h1>Welcome to Events page</h1>
    <ul>
        @foreach($events as $event)
            <li>{{ $event }}</li>
        @endforeach
    </ul>
@stop
