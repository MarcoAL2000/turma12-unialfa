@extends('app')
@section('title', 'Editar Nível')
@section('content')

    <h1>Editar Nível</h1>

    <form action="{{ route('niveis.update', $nivel) }}" method="POST">
         @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{ $nivel->nome }}"
                class="form-control" required>
        </div>

        <button class="btn btn-success mb-3" type="submit">Enviar</button>
        <a class="btn btn-secondary mb-3" href="{{ route('niveis.index') }}">Voltar para lista de níveis</a>
    </form>
@endsection
