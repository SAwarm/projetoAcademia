<?php 
	session_start();
	if(!empty($_SESSION['logado'])){ ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Cadastro de clientes</title>
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

<?php include('paginacaoTelas.php'); ?>

<div class="container" style="margin-top: 5%; margin-bottom: 5%;">
  <div class="row">
    <div class="col-sm-12">
    

     <h2>Cadastro de clientes</h2><br><br>
     <?php
    include('./../backend/conexao.php');
    
      if (!$link) {
        die('Não foi possível conectar: ' . mysqli_error());
    }
    
    $query = "SELECT * from endereco";
    $result = mysqli_query ($link, $query);

  ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <?php if ($result) { 
    while($row = mysqli_fetch_array($result)) { ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['cod'] ?></th>
      <td><?php echo $row ['rua']; ?></td>
      <td><?php echo $row ['numero']; ?> </td>
      <td><?php echo $row ['bairro']; ?> </td>
      <td><?php echo $row ['cidade']; ?> </td>
      <td><?php echo $row ['estado']; ?> </td>
    </tr>
    
  </tbody>
  <?php } ?>
<?php } ?>
</table>
   </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0;">
  <p>JR Fitness system</p>
  <p>Sistema de controle de clientes</p>
</div>

</body>
</html>

<?php } else { ?>
<?php	header('Location: '.'erro404.php'); ?>
<?php } ?>