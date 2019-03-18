@extends('layouts.master')

@section('title', 'Events')

@section('content')
    <h1>Liste des {{ count($events) }} evenement(s)</h1>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>description</th>
            <th>location</th>
            <th>price</th>
            <th>Event</th>
        </tr>
    @foreach($events as $event)
        <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->location }}</td>
            <td>{!! format_price($event) !!}</td>
            <td>{{ $event->start_at->format('d/m/Y H:i') }}</td>
        </tr>
    @endforeach
    </table>
@stop
