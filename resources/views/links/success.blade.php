@extends('layouts/master')

@section('title', 'About')

@section('content')

<h1>Bravo votre lien a été crée !</h1>

<p>
    <a href="{{ action('LinksController@show', ['id' => $link->id]) }}" class="btn btn-primary" target="blank">
        {{ route('link.show', $link) }}
    </a>
</p>

{{-- <p><a href="{{$link->url}}" class="btn btn-primary" target="blank">r/{{$link->id}}</a></p> --}}

@endsection
