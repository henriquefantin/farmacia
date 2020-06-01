@extends('layouts.template')

@section('conteudo')
	<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Venda</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th> 
        <th>Valor da Venda</th>
        <th>Data da Compra</th>        
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($venda as $v)
      <tr>
        <td>{{ $v->id}}</td>
        <td>{{ $v->valor_venda}}</td>
        <td>{{ $v->created_at}}</td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('cadastro_venda') }}">Cadastrar Nova Venda</a>
@endsection
