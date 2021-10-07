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
    <div class="col-sm-6">
     <h2>Cadastro de clientes</h2><br><br>
     <form action="./../backend/cadastroCliente.php" method="POST" enctype="multipart/form-data">
        <fieldset>

        <P style="font-size: 20px;">Nome do Cliente: <input type="text" placeholder=" Digite o nome do cliente" id="nome_cliente" name="nome_cliente">

        <P style="font-size: 20px;">Data de Nascimento: <input type="date" placeholder=" Digite a data de nascimento" id="nascimento_cliente" name="nascimento_cliente">

        <P style="font-size: 20px;">RG: <input type="text" placeholder=" Digite o RG do cliente" id="rg_cliente" name="rg_cliente">

        <p style="font-size: 20px;">CPF: <input type="text" placeholder=" Digite o CPF do cliente" id="cpf_cliente" name="cpf_cliente">
        <p style="font-size: 20px;">Endereço: <input type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalEndereco" value="Abrir caixa de informações" placeholder="Endereço">
        <p style="font-size: 20px;">Gênero:
        <select name="genero_cliente" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
          Outro: <input type="text" name="outrogenero">
        </p>
        <p style="font-size: 20px;">Tipo Físico:
        <select name="tipo_fisico" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Ectomorfo">Ectomorfo</option>
          <option value="Mesomorfo">Mesomorfo</option>
          <option value="Endomorfo">Endomorfo</option>
        </select>
        </p>
        <p style="font-size: 20px;">Tipo de treino:
        <select name="tipo_treino" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Musc">Musculação</option>
          <option value="Func">Funcional</option>
        </select>
        </p>
        <p style="font-size: 20px;">Mensalidade: </p>
        <ul type="circle">
        <li>em dia&nbsp&nbsp&nbsp <input type="checkbox" name="paga" style="background-color: #DDDDDD;"><br></li>
        <li>atrasada <input type="checkbox" name="atrasada" style="background-color: #DDDDDD;"></li>
        </ul>
        <p style="font-size: 20px;">Link da foto: <input name="userfile" type="file" /></p>
          <p style="font-size: 20px;">E-mail: <input type="text" placeholder=" Digite o e-mail do cliente" id="email_cliente" name="email_cliente"></p>
          <p style="font-size: 20px;">Telefone: <input type="text" placeholder=" Digite o telefone do cliente" id="telefone_cliente" name="telefone_cliente"></p>
          <p style="font-size: 20px;">Observação: <input type="text" placeholder=" Digite uma observação" id="observação_cliente" name="observação_cliente"></p>
        <div class="modal fade" id="modalEndereco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Informações do endereço</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Rua:</label>
                  <input type="text" class="form-control" id="rua-name" name="rua">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Número:</label>
                  <input type="text" class="form-control" id="numero-name" name="numero">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cidade:</label>
                  <input type="text" class="form-control" id="cidade-name" name="cidade">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Bairro:</label>
                  <input type="text" class="form-control" id="bairro-name" name="bairro">
                </div>
                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Estado:</label>
                  <select  class="form-control" name= "estado" style="background-color: #DDDDDD;">
                    <option  class="form-control" value="0">Selecione</option>
                    <option  class="form-control" value="SC">Santa Catarina</option>
                    <option  class="form-control" value="RS">Rio Grande do Sul</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salvar</button>
              <!--button type="button" class="btn btn-primary"></button-->
            </div>
          </div>
        </div>
      </div>
        <!--
        <p style="text-transform: uppercase; font-size: 20px;"><strong>Endereço</strong></p>
        <p style="font-size: 20px;">Estado:
              <select name= "seleção" style="background-color: #DDDDDD;">
                <option value="0">selecione</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
              </select>
              outra: <input type="text" name="outra">
          </p>
          </p>
          <p style="font-size: 20px;">Cidade: <input type="text" placeholder=" Digite a cidade do cliente" name="cidade_cliente"></p>
          <p style="font-size: 20px;">Bairro: <input type="text" placeholder=" Digite o bairro do cliente" name="bairro_cliente"></p>
          <P style="font-size: 20px;">Rua: <input type="text" placeholder=" Digite a rua do cliente" name="rua_cliente"></P>
          <P style="font-size: 20px;">Número: <input type="text" placeholder=" Digite o número do cliente" name="numerocasa_cliente"></P>
         
        </p>
       
        
        -->
        <button type="submit" class="btn btn-primary btn-enviar-dados-clientes">Enviar</button>
        </fieldset>
      </form><br>
  
   </div>
   <div class="col-sm-6">
   		<p>Buscar pelo nome: <input type="text" placeholder="Digite o nome do cliente" class="text-buscar" name="text-buscar"></p>
		<?php
				//include('./../backend/conexao.php');
				
				//if (!$link) {
				//	die('Não foi possível conectar: ' . mysqli_error());
				//}
				
				//$query = "SELECT * from endereco LIMIT 10";
				//$result = mysqli_query ($link, $query);

		?>
		<table class="table">
			<thead>
				<tr>
				<th scope="col">Id</th>
				<th scope="col">Nome</th>
        <th scope="col">Cpf</th>
        <th scope="col">Ações</th>
				</tr>
			</thead>
			<?php //if ($result) { 
				//while($row = mysqli_fetch_array($result)) { ?>
					<tbody id="popularDados">
					</tbody>
				<?php// } ?>
			<?php //} ?>
		</table>
   </div>
  </div>
</div>

<div class="modal fade modalMensagem" id="myModal1 modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-mensagem">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0;">
  <p>JR Fitness system</p>
  <p>Sistema de controle de clientes</p>
</div>

</body>
<script>
  $(document).on("click", ".btn-enviar-dados-clientes", function(e) {
		varMensangem = "";
		if($("#nome_cliente").val() == ""){
			e.preventDefault();
			varMensangem += " Nome,"	
		}
		if($("#cpf_cliente").val() == ""){
			e.preventDefault();
			varMensangem += " Cpf,"
		}if($("#email_cliente").val() == ""){
			e.preventDefault();
			varMensangem += " Email,"
		}if($("#telefone_cliente").val() == ""){
			e.preventDefault();
			varMensangem += " Telefone,"
		}
		varNovaMensagem = varMensangem.slice(0, -1);
		$(".text-mensagem").html("Digite os campos de: " + varNovaMensagem)
		$('.modalMensagem').modal('show');
  });

  $( ".text-buscar" ).keyup(function() {
		$.ajax({
          url: ".././backend/buscarClientes.php",
          type: "POST",
          data: {q : $('.text-buscar').val()},
          success: function(result){
			cols = "";
			if(result == "null"){
				cols += '<td scope="row"></td>';
				$("#popularDados").html(cols);
			}else{
				jq_json_obj = $.parseJSON(result);
				cont = jq_json_obj.length
				for (x = 0; x < cont; x++){
					cols += '<tr><td scope="row">'+jq_json_obj[x]['cod']+'</td>';
					cols += '<td>'+jq_json_obj[x]['nome']+'</td>';
          cols += '<td>'+jq_json_obj[x]['cpf']+'</td>';
					cols += '<td><button type="button" style="margin-right: 10px;" class="btn btn-success"><i class="far fa-edit"></i></button><button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td></tr>';

					$("#popularDados").html(cols);
				} 
			}

          },
          error: function(error){
            console.log(error);
          }
      });
	});

</script>
</html>
<?php } else { ?>
<?php	header('Location: '.'erro404.php'); ?>
<?php } ?>