@extends('app')
@section('title','Lista de Níveis')
@section('content')
<h1>Lista de Níveis</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade de devs</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($niveis as $nivel)
        <tr>
            <th scope="row">{{$nivel->id}}</th>
            <th scope="row">
                <a href="{{route('niveis.show', $nivel)}}">{{$nivel->nome}}</a>
            </th>
            <td>{{ $nivel->desenvolvedor->count() }}</td>
            <th>
                <a class="btn btn-primary" href="{{route('niveis.edit', $nivel)}}">Editar</a>

            <form action="{{route('niveis.destroy', $nivel)}}"
            method="POST"
            >
            @method('DELETE')
            @csrf

            <button  

              class="btn btn-danger"
              type="submit"
              onclick="return confirm('Tem certeza que quer apagar?')" 
              > 
              
              APAGAR

            </button>
             </form>
             @if(session('error') && session('nivel_id') == $nivel->id)
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
             @endif
            </th>
           
        </tr>

        @endforeach
    </tbody>
</table>

{{ $niveis->onEachSide(5)->links('pagination::bootstrap-4') }}
<a class="btn btn-success" href="{{ route('niveis.create') }}">Novo nivel</a>
<a class="btn btn-secondary" href="{{ route('desenvolvedors.index') }}">Voltar para Lista de Desenvolvedores</a>
<a class="btn btn-primary" href="/sobre">Sobre</a>

@endsection