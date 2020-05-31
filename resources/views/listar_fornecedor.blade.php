@extends('layouts.template')

@section('conteudo')
  <div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Funcionarios</h1>
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
      @foreach ($funcionario as $f)
      <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->nome }}</td>
        <td>{{ $f->cidade}}</td>
        <td>{{ $f->created_at}}</td>
      </tr>
      @endForeach
    </tbody>
  </table>
<a class="btn btn-success" href="{{ route('cadastro_funcionario') }}">Cadastrar Nova</a>
@endsection

