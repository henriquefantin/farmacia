@extends('layouts.template')

@section('conteudo')

 <div class="jumbotron bg-dark text-white">
  <h1 class="display-4">Cadastro de Venda</h1>
</div>

<form method="post" action="{{ route('venda_add') }}">
	@csrf
	<div class="form-group pr-3 pl-3 col-md-12">
	<select name="id_cliente" class="form-control">
		@foreach ($cliente as $c)
		<option value="{{ $c->id }}">{{ $c->nome }}</option>
		@endforeach
	</select>
</div>
<div class="form-group pr-3 pl-3 col-md-12">
	<select name="id_funcionario" class="form-control">
		@foreach ($funcionario as $f)
		<option value="{{ $f->id }}">{{ $f->nome }}</option>
		@endforeach
	</select>
</div>
<div class="form-group pr-3 pl-3 col-md-12">
	<input type="submit" class="btn btn-success" value="Cadastrar">
</div>
</form>
@endsection