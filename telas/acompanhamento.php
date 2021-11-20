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
      <th scope="col">Nome Cliente</th>
      <th scope="col">CPF</th>
      <th scope="col">Data Adicionado</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody class="tableAcompanhamento">
  </tbody>
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

  $(document).ready(function(){
    reloadTable()
  })

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
      id = $(this).attr('data-id');
      
      if(id != undefined){
        
        $.ajax({
          url: ".././backend/updateAcompanhamento.php",
          type: "POST",
          data: {id: id, codigo_cliente: codigo_cliente, peso:peso, altura:altura, maa:maa, mab:mab, mac:mac, obs:obs},
          success: function(result){
		      	if(result == "true"){
              alert("Acompanhamento salvo com sucesso!")
              reloadTable()
            }else{
              alert("Erro ao inserir acompanhamento!")
            }
          },
          error: function(error){
			      alert('Error '+ error);
          }
      	});

      }else{
        $.ajax({
          url: ".././backend/novoAcompanhamento.php",
          type: "POST",
          data: {codigo_cliente: codigo_cliente, peso:peso, altura:altura, maa:maa, mab:mab, mac:mac, obs:obs},
          success: function(result){
		      	if(result == "true"){
              alert("Acompanhamento salvo com sucesso!")
              reloadTable()
            }else{
              alert("Erro ao inserir acompanhamento!")
            }
          },
          error: function(error){
			      alert('Error '+ error);
          }
      	});
      }
  })

  function reloadTable(){
    $.ajax({
          url: ".././backend/select_acompanhamento.php",
          type: "POST",
          success: function(result){
            jq_json_obj = $.parseJSON(result);
				    cont = jq_json_obj.length;
            cols = "";
            for(i = 0; i < cont; i++){
              cols +='<tr><td>'+jq_json_obj[i][0]+'</td><td>'+jq_json_obj[i]["nome"]+'</td><td>'+jq_json_obj[i]["cpf"]+'</td><td>'+jq_json_obj[i]["data_acompanhamento"]+'</td>'+
              '<td><button type="button" data-id-edit="'+jq_json_obj[i][0]+'" style="margin-right: 10px;" class="btn btn-success btn-edit"><i class="far fa-edit"></i></button><button type="button" class="btn btn-danger btn-exclude"  data-id="'+jq_json_obj[i][0]+'"><i class="fas fa-times-circle"></i></button></td></tr>';
            }
          $(".tableAcompanhamento").html(cols);
          },
          error: function(error){
			      alert('Error '+ error);
          }
    });
  }

  $(document).on("click", ".btn-edit", function(e) {
    cod = $(this).attr('data-id-edit');

    $.ajax({
          url: ".././backend/select_acompanhamento.php",
          type: "POST",
          data: {q: cod},
          success: function(result){

            jq_json_obj = $.parseJSON(result);
				    cont = jq_json_obj.length;
            cols = "";
            for(i = 0; i < cont; i++){
              $('.btn-salvar-acompanhamento').attr('data-id', jq_json_obj[i][0])
              $('#codigo-cliente').val(jq_json_obj[i]['cod']);
              $('#peso-cliente').val(jq_json_obj[i]['peso']);
              $('#altura-cliente').val(jq_json_obj[i]['altura']);
              $('#maa-cliente').val(jq_json_obj[i]['maa']);
              $('#mab-cliente').val(jq_json_obj[i]['mab']);
              $('#mac-cliente').val(jq_json_obj[i]['mac']);
              $('#observacao-cliente').val(jq_json_obj[i]['obs']);
            }

          },
          error: function(error){
			      alert('Error '+ error);
          }
    });
  })
</script>

<?php } else { ?>
<?php	header('Location: '.'erro404.php'); ?>
<?php } ?>