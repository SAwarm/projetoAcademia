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

        <P >Nome do Cliente: <input type="text" placeholder=" Digite o nome do cliente" id="nome_cliente" name="nome_cliente">

        <P >Data de Nascimento: <input type="date" placeholder=" Digite a data de nascimento" id="nascimento_cliente" name="nascimento_cliente">

        <P >RG: <input type="text" placeholder=" Digite o RG do cliente" id="rg_cliente" name="rg_cliente">

        <p >CPF: <input type="text" placeholder=" Digite o CPF do cliente" id="cpf_cliente" name="cpf_cliente">
        <p >Endereço: <input type="button" class="btn btn-dark" style="background-color: #2F4F4F; color: white;" data-toggle="modal" data-target="#modalEndereco" value="Abrir caixa de informações" placeholder="Endereço">
        <p >Gênero:
        <select name="genero_cliente" id="genero_cliente" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
          <option value="Outros">Outros</option>
        </select>

        </p>
        <p >Tipo Físico:
        <select name="tipo_fisico" id="tipo_fisico" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Ectomorfo">Ectomorfo</option>
          <option value="Mesomorfo">Mesomorfo</option>
          <option value="Endomorfo">Endomorfo</option>
        </select>
        </p>
        <p >Tipo de treino:
        <select name="tipo_treino" id="tipo_trien" class="tipo_trien" style="background-color: #DDDDDD;">
          <option value="0">Selecione</option>
          <option value="Musculação">Musculação</option>
          <option value="Funcional">Funcional</option>
        </select>
        </p>
        <p >Mensalidade: </p>
        <ul type="circle">
        <li>em dia&nbsp&nbsp&nbsp <input type="checkbox" name="paga" style="background-color: #DDDDDD;"><br></li>
        <li>atrasada <input type="checkbox" name="atrasada" style="background-color: #DDDDDD;"></li>
        </ul>
        <p >Link da foto: <input name="userfile" type="file" /></p>
          <p >E-mail: <input type="text" placeholder=" Digite o e-mail do cliente" id="email_cliente" name="email_cliente"></p>
          <p >Telefone: <input type="text" placeholder=" Digite o telefone do cliente" id="telefone_cliente" name="telefone_cliente"></p>
          <p >Observação: <input type="text" placeholder=" Digite uma observação" id="observacao_cliente" name="observação_cliente"></p>
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
                  <select  class="form-control" name= "estado" id="estado" style="background-color: #DDDDDD;">
                    <option  class="form-control" value="0">Selecione</option>
                    <option  class="form-control" value="SC">Santa Catarina</option>
                    <option  class="form-control" value="RS">Rio Grande do Sul</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" style="background-color: #2F4F4F; color: white;" data-dismiss="modal">Salvar</button>
              <!--button type="button" class="btn btn-primary"></button-->
            </div>
          </div>
        </div>
      </div>
       
        
        -->
        <input class="inputUpdate2" name="inputHiddenEndereco" value="" type="hidden">
				<input class="inputUpdate" value="" type="hidden">
        <button type="submit" style="background-color: #2F4F4F; color: white;" class="btn btn-primary btn-enviar-dados-clientes">Enviar</button>
        </fieldset>
      </form><br>
  
   </div>
   <div class="col-sm-6">
   		<p>Buscar pelo nome: <input type="text" placeholder="Digite o nome do cliente" class="text-buscar" name="text-buscar"></p>
		<?php
				include('./../backend/conexao.php');
				
				if (!$link) {
					die('Não foi possível conectar: ');
				}
				
				$query = "SELECT * from cliente LIMIT 10";
				$result = mysqli_query ($link, $query);

		?>
		<table class="table table-cliente">
			<thead>
				<tr>
				<th scope="col">Id</th>
				<th scope="col">Nome</th>
        <th scope="col">Cpf</th>
        <th scope="col">Ações</th>
				</tr>
			</thead>
			<?php if ($result) { 
				while($row = mysqli_fetch_array($result)) { ?>
					<tbody id="popularDados">
            <td><?php echo $row['cod']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['cpf']; ?></td>
            <td><button type="button" data-id-edit="<?php echo $row['cod']; ?>" style="margin-right: 10px;" class="btn btn-success btn-edit"><i class="far fa-edit"></i></button><button type="button" class="btn btn-danger btn-exclude"  data-id="<?php echo $row['cod']; ?>"><i class="fas fa-times-circle"></i></button></td></tr>

					</tbody>
				<?php } ?>
			<?php } ?>
		</table>
   </div>
  </div>
</div>

<div class="modal fade modalMensagem" id="myModal1 modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title .text-mensagem" id="exampleModalLabel" >Mensagem do Sistema!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-mensagem">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-modal" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0;">
  <p>Jr Fitness system</p>
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

    if(varMensangem != ""){
      varNovaMensagem = varMensangem.slice(0, -1);
      $(".text-mensagem").html("Digite os campos de: " + varNovaMensagem)
      $('.modalMensagem').modal('show');
    }
  });

  $( ".text-buscar" ).keyup(function() {
		$.ajax({
          url: ".././backend/buscarClientes.php",
          type: "POST",
          data: {q : $('.text-buscar').val(), action: null},
          success: function(result){
			cols = "";
      $(".table-cliente > tbody").empty();

      if($('.text-buscar').val() == ""){
        $.ajax({
          url: ".././backend/buscarClientesTable.php",
          type: "POST",
          data: {q : $('.text-buscar').val(), action: null},
          success: function(result){
			    cols = "";
      
          if(result == "null"){
            cols = '<td scope="row"></td>';
            $("#popularDados").html(cols);
          }else{
            jq_json_obj = $.parseJSON(result);
            cont = jq_json_obj.length
            for (x = 0; x < cont; x++){
              cols += '<tr><td scope="row">'+jq_json_obj[x]['cod']+'</td>';
              cols += '<td>'+jq_json_obj[x]['nome']+'</td>';
              cols += '<td>'+jq_json_obj[x]['cpf']+'</td>';
              cols += '<td><button type="button" data-id-edit="'+jq_json_obj[x]['cod']+'" style="margin-right: 10px;" class="btn btn-success btn-edit"><i class="far fa-edit"></i></button><button type="button" class="btn btn-danger btn-exclude"  data-id="'+jq_json_obj[x]['cod']+'"><i class="fas fa-times-circle"></i></button></td></tr>';

              $("#popularDados").html(cols);
            }
			    }

          },
          error: function(error){
            console.log(error);
          }
      });

      } 
			if(result == "null"){
				cols = '<td scope="row"></td>';
				$("#popularDados").html(cols);
			}else{
				jq_json_obj = $.parseJSON(result);
				cont = jq_json_obj.length
				for (x = 0; x < cont; x++){
					cols += '<tr><td scope="row">'+jq_json_obj[x]['cod']+'</td>';
					cols += '<td>'+jq_json_obj[x]['nome']+'</td>';
          cols += '<td>'+jq_json_obj[x]['cpf']+'</td>';
					cols += '<td><button type="button" data-id-edit="'+jq_json_obj[x]['cod']+'" style="margin-right: 10px;" class="btn btn-success btn-edit"><i class="far fa-edit"></i></button><button type="button" class="btn btn-danger btn-exclude"  data-id="'+jq_json_obj[x]['cod']+'"><i class="fas fa-times-circle"></i></button></td></tr>';

					$("#popularDados").html(cols);
				} 
			}

          },
          error: function(error){
            console.log(error);
          }
      });
	});

  $(document).on("click", ".btn-edit", function(e) {
		$.ajax({
          url: ".././backend/buscarClientes.php",
          type: "POST",
          data: {q : $(this).attr('data-id-edit'), action: "popularCampos"},
          success: function(result){
            jq_json_obj = $.parseJSON(result);

            $('.inputUpdate').attr("name", 'inputHidden');
            $('.inputUpdate').val(jq_json_obj[0]);
            $('.inputUpdate2').val(jq_json_obj['endereco']);
            
            $('#nome_cliente').val(jq_json_obj['nome'])
            $('#nascimento_cliente').val(jq_json_obj['data_nasc'])
            $('#rg_cliente').val(jq_json_obj['rg'])
            $('#cpf_cliente').val(jq_json_obj['cpf'])
            $('#rua-name').val(jq_json_obj['rua'])
            $('#numero-name').val(jq_json_obj['numero'])
            $('#cidade-name').val(jq_json_obj['cidade'])
            $('#bairro-name').val(jq_json_obj['bairro'])
            $('#estado').val(jq_json_obj['estado'])
            if(jq_json_obj['genero'] == 1){
              $('#genero_cliente').val('Masculino');
            }else if(jq_json_obj['genero'] == 2){
              $('#genero_cliente').val('Feminino');
            }else{
              $('#genero_cliente').val('Outros');
            }

            $('#email_cliente').val(jq_json_obj['email'])
            $('#telefone_cliente').val(jq_json_obj['fone'])
            $('#observacao_cliente').val(jq_json_obj['obs'])

            if(jq_json_obj['tipo_treino'] == 1){
              $('.tipo_trien').val("Musculação")
            }else{
              $('.tipo_trien').val("Funcional")
            }

            if(jq_json_obj['tipo_fisico'] == 1){
              $('#tipo_fisico').val('Ectomorfo');
            }else if(jq_json_obj['tipo_fisico'] == 2){
              ('#tipo_fisico').val('Mesomorfo');
            }else{
              ('#tipo_fisico').val('Endomorfo')
            }
          
            

          },
          error: function(error){

          }
      	});
    });

    $(document).on("click", ".btn-exclude", function(e) {

      $(".text-mensagem").html("Tem certeza que deseja excluir o funcionário?")
      $('.modalMensagem').modal('show');
      $('.btn-modal').addClass('btn-exclude-modal');
      $('.btn-exclude-modal').html("Excluir");
      $('.btn-exclude-modal').attr('data-id', $(this).attr('data-id'));

    })

    $(document).on("click", ".btn-exclude-modal", function(e) {
      id = $(this).attr('data-id');

      $.ajax({
            url: ".././backend/excluirCliente.php",
            type: "POST",
            data: {q : id},
            success: function(result){
              if(result == "true"){
                alert("Excluído com sucesso!");
                $('.modalMensagem').modal('hide');
              }else{
                alert("Erro ao excluir registro!");
                $('.modalMensagem').modal('hide');
              }
            },
            error: function(error){

            }
        });
    })

</script>
</html>
<?php } else { ?>
<?php	header('Location: '.'erro404.php'); ?>
<?php } ?>