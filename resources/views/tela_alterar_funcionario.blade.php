@extends('layouts.template')

@section('conteudo')
 <div class="jumbotron bg-dark text-white">
  <h1 class="display-4">Alterar Funcionario</h1>
</div>
<form method="post" action="{{ route('funcionario_alterar', ['id' => $f->id]) }}">
	@csrf
	<input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $f->nome }}">
	<input type="text" class="form-control" name="cpf" placeholder="Login" value="{{ $f->cpf }}">
	<input type="text" class="form-control" name="rg" placeholder="Nome" value="{{ $f->rg }}">
	<input type="text" class="form-control" name="rua" placeholder="Login" value="{{ $f->rua }}">
	<input type="text" class="form-control" name="numero_casa" placeholder="Nome" value="{{ $f->numero_casa }}">
	<input type="text" class="form-control" name="cidade" placeholder="Login" value="{{ $f->cidade }}">
	<input type="text" class="form-control" name="bairro" placeholder="Nome" value="{{ $f->bairro }}">
	<input type="text" class="form-control" name="cep" placeholder="Login" value="{{ $f->cep }}">
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
  <select class="form-group pr-3 pl-3 col-md-12" name="estado_civil">

      <option>Solteiro<option>
        <option>Casado</option>
        <option>Viuvo</option>
        <option>Separado</option>
        <option>Divorciado</option>
        <option>União estavel</option>
        <option>Viuvo</option>
        <option>Outro</option>
      </select>
	<input type="submit" class="btn btn-success" value="Alterar">
</form>


    
@endsection