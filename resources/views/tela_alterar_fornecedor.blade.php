@extends('layouts.template')

@section('conteudo')
 <div class="jumbotron bg-dark text-white">
  <h1 class="display-4">Alterar Fornecedor</h1>
</div>
<form method="post" action="{{ route('fornecedor_alterar', ['id' => $f->id]) }}">
	@csrf
	<input type="text" class="form-control" name="rasao_social" placeholder="Nome" value="{{ $f->rasao_social }}">
	<input type="text" class="form-control" name="nome_fantasia" placeholder="Login" value="{{ $f->nome_fantasia }}">
	<input type="text" class="form-control" name="cnpj" placeholder="Nome" value="{{ $f->cnpj }}">
	<input type="text" class="form-control" name="inscricao_estadual" placeholder="Login" value="{{ $f->inscricao_estadual }}">
	<input type="text" class="form-control" name="rua" placeholder="Nome" value="{{ $f->rua }}">
	<input type="text" class="form-control" name="numero_logradouro" placeholder="Login" value="{{ $f->numero_logradouro }}">
	<input type="text" class="form-control" name="cidade" placeholder="Nome" value="{{ $f->cidade }}">
	<input type="text" class="form-control" name="bairro" placeholder="Login" value="{{ $f->bairro }}">
	<input type="text" class="form-control" name="cep" placeholder="Nome" value="{{ $f->cep }}">
	<select class="form-group pr-3 pl-3 col-md-12" name="estado" >

		<option>{{ $f->estado }}</option>
  		<option>AC</option>
  		<option>AL</option>
  		<option>AP</option>
  		<option>AM</option>
  		<option>BA</option>
  		<option>CE</option>
  		<option>DF</option>
  		<option>ES</option>
  		<option>GO</option>
  		<option>MA</option>
  		<option>MT</option>
  		<option>MS</option>
  		<option>MG</option>
  		<option>PA</option>
  		<option>PB</option>
  		<option>PR</option>
  		<option>PE</option>
  		<option>PI</option>
  		<option>RJ</option>
  		<option>RN</option>
  		<option>RS</option>
  		<option>RO</option>
  		<option>RR</option>
  		<option>SC</option>
  		<option>SP</option>
  		<option>SE</option>
  		<option>TO</option>
  		</select>
	
	<input type="text" class="form-control" name="numero_celular" placeholder="Nome" value="{{ $f->numero_celular }}">
	<input type="text" class="form-control" name="email" placeholder="Login" value="{{ $f->email }}">
	<input type="submit" class="btn btn-success" value="Alterar">
</form>
@endsection