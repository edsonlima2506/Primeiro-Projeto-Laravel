@extends('layouts.main')
@section('title', 'Eventos')
@section('main')

<h1 class="eventsTitle">Eventos</h1>

<div class="eventsContainer">
    @foreach($events as $event)
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-text">{{ $event->description }}</p>
        <a href="#" class="card-link">Ver evento</a>
    </div>
    </div>
    @endforeach
</div>

@endsection