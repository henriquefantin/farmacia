@extends('layouts.template')

@section('conteudo')
  <div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Clientes</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th> 
        <th>NOME</th>
        <th>CIDADE</th>      
        <th>DATA</th>
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($us as $c)
      <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->cidade}}</td>
        <td>{{ $c->created_at}}</td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('cadastro_cliente') }}">Cadastrar Nova</a>
@endsection
