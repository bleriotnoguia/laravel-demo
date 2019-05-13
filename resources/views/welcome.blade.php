@extends('layouts.master')

@section('title', 'Home')

{{-- Ceci est un commentaire blade --}}

@section('content')
<h1>Welcome to {{ config('app.name') }}</h1>
<h2>Bleriot Noguia</h2>
@include('layouts.shared._weekend')
@stop

@section('footer')
    <p>Copyright @bleriotnoguia 2018</p>
@endsection