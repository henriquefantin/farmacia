@extends('layouts.template')

@section('conteudo')
  <div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Fornecedor</h1>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th> 
        <th>NOME</th>
        <th>CIDADE</th>      
        <th>DATA</th>
        <th>OPERACOES</th>
      </tr>
    </thead>
    <tbody class="thead-light">
      @foreach ($fornecedor as $f)
      <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->rasao_social }}</td>
        <td>{{ $f->cidade}}</td>
        <td>{{ $f->created_at}}</td>
        <td>
        <a class="btn btn-warning" href="{{ route('fornecedor_alteracao', [ 'id' => $f->id ]) }}">Alterar</a>
      </td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('cadastro_fornecedor') }}">Cadastrar Novo</a>


@endsection

