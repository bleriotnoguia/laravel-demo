@extends('layouts.master')

@section('content')
    @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
    @endforeach    
@endsection