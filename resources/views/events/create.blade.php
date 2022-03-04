@extends('layouts.main')
@section('title', 'Criar Evento')
@section('main')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome do Evento</label>
            <input type="text" class="form-control" id="title" name="title">
            <label for="description">Descrição</label>
            <textarea type="text" class="form-control" id="description" name="description">
            </textarea>
            <label for="city">Local do evento</label>
            <input type="text" class="form-control" id="city" name="city">
            <label for="private">É privado?</label>
            <select type="text" class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </div>
    </form>
</div>

@endsection