@extends('layouts.main')
@section('title', 'Produto')

@section('footer')
    @if($id !== 404)
        <p>Exibindo produto id: {{ $id }}</p>
    @else
        <p>Erro 404: Produto não encontrado</p>
    @endif
@endsection