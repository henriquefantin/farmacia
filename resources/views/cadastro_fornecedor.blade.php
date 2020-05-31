 @extends('layouts.template')
@section('conteudo')


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <h1>Cadastro do fornecedor</h1>


	<form method="GET" action="{{ route('fornecedor_add') }}">
		@csrf

  
  
  </style>

		<form class="form-inline">
 		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Razão Social</label>
   			<input type="text" class="form-control" placeholder="Razão Social" name="rasao_social">
  		</div>
    <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Nome Fantasia</label>
        <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome_fantasia">
      </div>
  	
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">CNPJ</label>
   			<input type="text" class="form-control" placeholder="CNPJ" name="cnpj">
  		</div>

    <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Inscrição Estadual</label>
        <input type="text" class="form-control" placeholder="Inscrição Estadual" name="inscricao_estadual">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Rua</label>
        <input type="text" class="form-control" placeholder="Rua" name="rua">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Numero</label>
        <input type="text" class="form-control" placeholder="Numero" name="numero_logradouro">
      </div>
		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Cidade</label>
   			<input type="text" class="form-control" placeholder="Cidade" name="cidade">
  		</div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Bairro</label>
        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
      </div>

		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">CEP</label>
   			<input type="text" class="form-control" placeholder="CEP" name="cep">
  		</div>
		
	<select class="estado" name="estado">

		<option>UF</option>
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
		
		<button type="submit" name="Enviar"  class="btn btn-success">Enviar</button>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Celular</label>
        <input type="text" class="form-control" placeholder="celular" name="numero_celular">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Email</label>
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>

	</form>
  @endsection
