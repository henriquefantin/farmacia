@extends('layouts.template')

@section('conteudo')
	<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Venda</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th> 
        <th>Descrição</th>
        <th>Valor</th>        
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($venda as $v)
      <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->descricao }}</td>
        <td>{{ $v->valor}}</td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('cadastro_venda') }}">Cadastrar Nova Venda</a>
@endsection
