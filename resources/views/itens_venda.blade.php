@extends ('modelo')
@section ('conteudo')

	<div class="jumbotron bg-texto escuto-branco">
		<h1 class="display-4">Vendas{{ $venda->id }}</h1>
	</div>

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Quantidade</th>
				<th>Valor unitario</th>
				<th>Subtotal</th>
				<th>Dados</th>
				<th>Operações</th>
			</tr>
		</thead>

	<tbody class=" thead-ligth">
		@foreach ($venda->produtos as $p )
	<tr>
		<td>{{ $p->pivot->id }}</td>
		<td>{{ $p->nome }}</td>

		<td>{{ $p->pivot->quantidade}}</td>

		<td>{{ $p->preco }}</td>

		<td>{{ $p->pivot->subtotal }}</td>

		<td>{{ $p->pivot->created_at }}</td>
		<td></td>

	</tr>
	@endForeach
	</tbody>
	</table>