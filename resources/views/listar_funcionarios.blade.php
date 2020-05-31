
@extends('layouts.template')

@section('conteudo')

<style type="text/css">
  
   body {

  background-color: #646467;

}
</style>

<table class="table table-striped" >
  <thead>
    <th>Lista de funcionarios</th>
          <th></th>
          <th></th>
          <th></th>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Login</th>
      <th>Operações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($funcionarios as $f)
    <tr>
      <td>{{ $f->id }}</td>
      <td>{{ $f->nome }}</td>
      <td>{{ $f->login }}</td>
     <td>
      <!--<a class="btn btn-warning" href="#">Alterar</a>  {{ route('#', ['id' => $f->id]) }} -->
      <!-- <a class="btn btn-danger" href="#" onclick="excluir({{ $f->id }})"> Excluir</a>-->
      <!--<a class="btn btn-success" href="#">Vendas</a> {{ route('#', ['id' => $f->id]) }}-->
     </td>
    </tr>
    @endforeach
  </tbody>

</table>
<!-- <a class="btn btn-primary" href="{{route('cadastro_funcionario')}}">Cadastrar novo</a> -->

<script>
  function excluir(id){
    if (confirm('Deseja excluir: ' + id + '?')){
      //processo para excluir
      location.href = '/funcionario/excluir/' + id;
    }
  }
</script>
@endsection