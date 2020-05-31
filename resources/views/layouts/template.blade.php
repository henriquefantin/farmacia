<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <div class="row">
    <nav class="navbar-expand-lg navbar navbar-dark bg-dark w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <a class="navbar-brand" href="#">Olá, {{ Auth::user()->name }}</a>
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('cliente_cadastro') }}">Cadastro <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('listar') }}">Clientes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('listar_vendas_geral') }}">Vendas <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="{{ route('produto_cadastro')}}">Produtos <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
	<div class="row">
      <div class="col-md-1">
        <!-- coluna vazia esquerda -->
      </div>
      <div class="col-md-10 mt-3">
        @if (session()->has('mensagem'))
          <div class="alert alert-danger">{{ session('mensagem') }}</div>
          {{ session()->forget(['mensagem']) }}
        @endif
        
        @yield('conteudo')
      </div>
      <div class="col-md-1">
        <!-- coluna vazia direita -->
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>