@extends('layouts.template')

@section('conteudo')
  <div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Cadastro de produtos</h1>
  </div>

  <form method="get" action="{{ route('produto_add') }}">
    @csrf
     <div class="form-row">
        <select name="id_cliente" class="form-control">
           @foreach ($cliente as $c)
            <option value="{{ $c->id }}">{{ $c->nome }}</option>
          @endforeach
       </select>
        <div class="form-group pr-3 pl-3 col-md-12">
            <label for="nome1">Descrição</label>
          <input type="text" name="descricao" class="form-control">
        </div>  
        <div class="form-group pr-3 pl-3 col-md-12">
            <label for="nome1">Nome</label>
          <input type="text" name="nome" class="form-control">
        </div> 
        <div class="form-row pl-1">   
          <div class="form-group pr-3 pl-3 col-md-6">
                <label for="nome1">Preço</label>
              <input type="number" name="valor_unitario" class="form-control" min="0" step="0.01">
          </div>    
          <div class="form-group pr-3 pl-3 col-md-5">
              <label for="nome1">Unidade de Medida</label>
            <input type="text" name="unidade_venda" class="form-control">
          </div>    
      </div>
        <div class="form-group pt-3 ml-2 col-md-12">
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
      </div> 
    </form>
  @endsection