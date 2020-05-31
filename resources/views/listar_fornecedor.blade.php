@extends('layouts.template')
@section('conteudo')
	<style type="text/css">
	table{
        max-width: 50%;
  			width: 100%;
 			  margin-bottom : 50%;
 			  table-layout: fixed;
        text-align: center;
            }
            td{
            	width: 50%;
            }
            body {
                background-color: #646467;
}
    </style>

<table class="table table-striped" >

  <thead>
    <th>Fornecedores:</th>
    <th> {{ $fornecedor->nome }}</th>
    <th> {{ $fornecedor->id }}</th>
  
  </thead>
  <tbody>

</tbody>
</table>
@endsection
    
