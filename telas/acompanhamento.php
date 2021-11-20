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
  <script src="https://kit.fontawesome.com/dacbc0308b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="estilos.css"/>

</head>

<body>

<?php include('title.php'); ?>
<?php include('paginacaoTelas.php'); ?>

<div class="container" style="margin-top: 5%; margin-bottom: 5%;">
  <div class="row">
    <div class="col-sm-12">
    
    <h2>Cadastro de Acompanhamentos</h2>
   
     <button class="btn btn-novo-acompanhamento" style="background-color: #2F4F4F; color: white; margin: 20px;">Novo Acompanhamento</button>
      <span style="margin-left: 40%;">Buscar Acompanhamento: <input type="text" placeholder="Digite o nome do cliente" class="text-buscar" name="text-buscar"></span>

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
<div class="modal fade" id="modalAcompanhamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cadastro Novo Acompanhamento</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Código do Cliente:</label>
                <input type="text" class="form-control" id="codigo-cliente" name="codigo-cliente">
							</div>
							<div class="form-group">
                <label for="recipient-name" class="col-form-label">Peso:</label>
                <input type="text" class="form-control" id="peso-cliente" name="peso-cliente">
							</div>
							<div class="form-group">
                <label for="recipient-name" class="col-form-label">Altura:</label>
                <input type="text" class="form-control" id="altura-cliente" name="altura-cliente">
							</div>
							<div class="form-group">
                <label for="recipient-name" class="col-form-label">Maa:</label>
                <input type="text" class="form-control" id="maa-cliente" name="maa-cliente">
							</div>
							<div class="form-group">
                <label for="recipient-name" class="col-form-label">Mab:</label>
                <input type="text" class="form-control" id="mab-cliente" name="mab-cliente">
							</div>
              <div class="form-group">
						  	<label for="recipient-name" class="col-form-label">Mac:</label>
						  	<input type="text" class="form-control" id="mac-cliente" name="mac-cliente">
							</div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Observação:</label>
                <input type="text" class="form-control" id="observacao-cliente" name="observacao-cliente">
							</div>
              
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-salvar-acompanhamento" data-dismiss="modal">Salvar</button>
						<!--button type="button" class="btn btn-primary"></button-->
					</div>
				</div>
			</div>
</html>

<script>
  $(document).on("click", ".btn-novo-acompanhamento", function(e) {
      $('#modalAcompanhamento').modal('show');
  })

  $(document).on("click", ".btn-salvar-acompanhamento", function(e) {
      codigo_cliente = $('#codigo-cliente').val();
      peso = $('#peso-cliente').val();
      altura = $('#altura-cliente').val();
      maa = $('#maa-cliente').val();
      mab = $('#mab-cliente').val();
      mac = $('#mac-cliente').val();
      obs = $('#observacao-cliente').val();

      $.ajax({
          url: ".././backend/novoAcompanhamento.php",
          type: "POST",
          data: {codigo_cliente: codigo_cliente, peso:peso, altura:altura, maa:maa, mab:mab, mac:mac, obs:obs},
          success: function(result){
		      	if(result == "true"){
              alert("Acompanhamento salvo com sucesso!")
            }else{
              alert("Erro ao inserir acompanhamento!")
            }
          },
          error: function(error){
			      alert('Error '+ error);
          }
      	});

  })

  function reloadTable(){
    $.ajax({
          url: ".././backend/select_acompanhamento.php",
          type: "POST",
          data: {},
          success: function(result){
            
          },
          error: function(error){
			      alert('Error '+ error);
          }
      	});
  }
</script>

<?php } else { ?>
<?php	header('Location: '.'erro404.php'); ?>
<?php } ?>