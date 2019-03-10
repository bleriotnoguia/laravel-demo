@extends('layouts.master')

@section('title', 'News')

@section('content')
    <p class="text-right">
        <a href="{{route('news.create')}}" class="btn btn-primary">Ajouter</a>
    </p>
    <hr>
    <h1>Tous mes articles</h1>
    <hr>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        @if($post->category)
            <p><em>{{$post->category->name}}</em></p>
        @endif
        <p>{{$post->body}}</p>
        <p><a href="{{ route('news.edit', $post) }}" class="btn btn-primary">Editer</a></p>
    @endforeach
@stop()