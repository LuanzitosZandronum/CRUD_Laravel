@extends('layouts.app')

@section('content')
    <header class= "container">
        <h2>Listagem de Clientes</h2>
        <ul>
            @foreach($clientes as $cliente)
                <li class="cliente-nome">
                    <span style="font-weight: bold;">Nome:</span> {{ $cliente->nome }} &nbsp;&nbsp; 
                    <span style="font-weight: bold;">Tele:</span> {{ $cliente->telefone}} &nbsp;&nbsp;  
                    <span style="font-weight: bold;">Nascimento:</span> {{ $cliente->nascimento}} &nbsp;&nbsp; 
                    <a href="/clientes/{{ $cliente->id }}/edit">EDITAR</a> 
                    <form action="/clientes/{{ $cliente->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </header>
@endsection
