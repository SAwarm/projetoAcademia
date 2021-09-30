<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="./node_modules/jquery/dist/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>

<body>

  <div class="jumbotron text-center" style="background-color: #666666; margin-bottom:0">
    <h1>JR Fitness system</h1>
  </div>

  <?php include('telas/paginacao.php'); ?>

  <div class="container" style="margin-top:13%; margin-bottom: 13%;">
    <div class="row">
      <div class="col-sm-12">
      
      <h2>Login</h2>
    <form>
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
    <button type="button" class="btn btn-primary btn-logar-sistema">Enviar</button>

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
  <script>
    
    $(document).on("click", ".btn-logar-sistema",function() {
      $.ajax({
          url: "./backend/login.php",
          type: "POST",
          data: {email: $("#email").val(),  senha: $("#senha").val()},
          success: function(result){
            alert(result);
          },
          error: function(error){
            alert(error);
          }
      });
    });
  </script>
</html>