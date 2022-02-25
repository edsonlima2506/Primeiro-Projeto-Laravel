@extends('layouts.main')
@section('title', 'Produtos')
@section('footer')
<h1>Tela de produtos</h1>
<a href="/">Voltar para a home</a>
@if($busca !== "")
 <p>O usuário está buscando por {{ $busca }}</p>
@endif
@endsection