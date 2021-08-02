<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos.css"/>

</head>

<body>

<div class="jumbotron text-center" style="background-color: #666666; margin-bottom:0">
  <h1>JR Fitness system</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">JR Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="tela login4.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro_funcionario.html">Cadastro de funcionário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro_cliente.html">Cadastro de cliente</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Acompanhamento</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:13%; margin-bottom: 13%;">
  <div class="row">
    <div class="col-sm-12">
    
      <h2>Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" name="senha">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Lembrar
      </label>
    </div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>

  </div>
  
  </form>
  
   </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0;">
  <p>JR Fitness system</p>
  <p>Sistema de controle de clientes</p>
</div>

</body>
</html>