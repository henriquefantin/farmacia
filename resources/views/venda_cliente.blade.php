@extends('layouts.template')

@section('conteudo')
<h1>Cadastro de venda</h1>
<form method="post" action="{{ route('venda_add') }}">
	@csrf
	<select name="id_cliente" class="form-control">
		@foreach ($cliente as $c)
		<option value="{{ $c->id }}">{{ $c->nome }}</option>
		@endforeach
	</select>
	<select name="id_funcionario" class="form-control">
		@foreach ($funcionario as $f)
		<option value="{{ $f->id }}">{{ $f->nome }}</option>
		@endforeach
	</select>
	<input type="submit" class="btn btn-success" value="Cadastrar">
</form>
@endsection