@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-content-center">
                {{ $serie->nome }}
                <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que quer apagar?')">APAGAR</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
