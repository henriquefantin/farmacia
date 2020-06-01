@extends('layouts.template')

@section('conteudo')
<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Lista de Produtos</h1>
  </div>
<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Operações</th>
		</tr>
	</thead>
	<tbody class="thead-light">
		@foreach ($produtos as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nome }}</td>
			<td>{{ $p->valor_unitario }}</td>
			<td>
				<a class="btn btn-danger" href="cliente_delete" onclick="exclui({{$p->id}})">Excluir</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<a class="btn btn-success" href="{{ route('cadastro_produto') }}">Cadastrar novo</a>
@endsection