@extends ('modelo')
@section ('conteudo')

	<div class="jumbotron bg-texto escuto-branco">
		<h1 class="display-4">Produto{{ $produto->id }}</h1>
	</div>

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>ID produto</th>
				<th>ID fornecedor</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Valor unitario</th>
				<th>Data e tempo</th>
			</tr>
		</thead>

	<tbody class=" thead-ligth">
		@foreach (/*arruma esse foreach ai*/ )
	<tr>
		<td>{{ $pdt->pivot->id }}</td>
		<td>{{ $forn->pivot->id }}</td>
		<td>{{ $pdt->nome }}</td>
		<td>{{ $pdt->descricao }}</td>
		<td>{{ $pdt->v_unitario }}</td>
		<td>{{ $pdt->pivot->created_at }}</td>
		<td></td>

	</tr>
	@endForeach
	</tbody>
	</table>