@extends('layouts.master')

@section('title', 'Help')

@section('content')
	<h1>Welcome to Help page</h1>

	@include('layouts.shared._weekend')
@stop

@push('scripts.footer')
	<script src="code.jquery.com/jquery.min.js"></script>
@endpush