@extends('app')
@section('title', 'Adicionar Novo Nível')
@section('content')

    <h1>Novo Nível</h1>

    <form action="{{ route('niveis.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" class="form-control" required>
        </div>
       
        <button class="btn btn-success mb-3" type="submit">Enviar</button>
        <a class="btn btn-secondary mb-3" href="{{ route('niveis.index') }}">Voltar para lista de níveis</a>
    </form>

@endsection
