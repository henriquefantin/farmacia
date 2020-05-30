 @extends('template')
  @section('conteudo')




	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <h1>Cadastro de produtos</h1>

	<form method="GET" action="{{ route('') }}">
		@csrf
  <style type="text/css">
  
   body {
  background-color: #646467;
  }
  </style>
  
		<form class="form-inline">
 		<select class="form-control" name="id_produto">
      @foreach($pdt as $produto)
     <option value="{{ $pdt->id }}">{{ $pdt->nome }}</option> 
     <option value="{{ $forn->id }}">{{ $forn->id }}</option>

     @endforeach
    </select>
  		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Valor</label>
   			<input type="number" step="0.01 " class="form-control" placeholder="Valor" name="valor">
  		</div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Descrição</label>
        <input type="text" step="0.01 " class="form-control" placeholder="Descrição" name="descricao">
      </div>

	<button type="submit" name="Enviar"  class="btn btn-primary">Cadastrar</button>

	</form>

  @endsection
