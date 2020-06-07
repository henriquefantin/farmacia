 @extends('layouts.template')
  @section('conteudo')




 <div class="jumbotron bg-dark text-white">
  <h1 class="display-4">Venda</h1>
</div>
  
  <table class="table table-striped" >

  <thead>
    <th>Venda</th>
    <th> {{ funcionario->id}} </th>
    <th> {{ cliente->id }}</th>
    <th>{{ venda->id }}</td>

  </thead>
  <tbody>
    <td>
      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Descrição</label>
        <input type="text" step="0.01 " class="form-control" placeholder="Descrição" name="descricao">
      </div>
    </td>

    <td>
      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Valor</label>
        <input type="number" step="0.01 " class="form-control" placeholder="Valor" name="valor">
      </div>
    </td>
    @endforeach
</tbody>
</table>

    <form class="form-inline">
       <select class="form-control" name="id_funcionario">

      @foreach($cl as $cliente)
     <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option> 

     @endforeach
    </select>
    <select class="form-control" name="id_cliente">

      @foreach($cl as $cliente)
     <option value="{{ $usuario->id }}">{{ $cliente->nome }}</option> 

     @endforeach
    </select>


  <button type="submit" name="Enviar"  class="btn btn-primary">Cadastrar</button>

  </form>

  @endsection