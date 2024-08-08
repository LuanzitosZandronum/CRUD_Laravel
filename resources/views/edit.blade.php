@extends('layouts.app')

@section('content')
    <header class="container">
        <h2>Editar Informações</h2>
        <form action="/clientes/{{ $cliente->id }}" method="POST">
            @csrf
            @method('PUT')
            <input name="nome" type="text" value="{{ $cliente->nome }}">
            <input name="nascimento" type="date" value="{{ $cliente->nascimento }}">
            <input name="telefone" type="text" value="{{ $cliente->telefone }}">
            <textarea name="observacao">{{ $cliente->observacao }}</textarea>
            <button type="submit">Salvar</button>
        </form>
    </header>
@endsection
