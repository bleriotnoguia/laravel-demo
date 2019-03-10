@extends('layouts/master')

@section('title', 'About')

@section('content')

<h1>Raccourcir un nouveau lien </h1>
<form action="{{ route('link.store') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="url">Lien à raccourcir</label>
      <input type="text" name="url" id="url" class="form-control" placeholder="http://...." aria-describedby="helpId">
      <small id="helpId" class="text-muted">Don't try fake links !</small>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" btn-lg btn-block >Raccourcir</button>
    </div>
</form>
@endsection
