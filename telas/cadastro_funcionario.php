<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Cadastro de funcionários</title>
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
    

     <h2>Cadastro de funcionários</h2><br><br>
     <form action=".././backend/cadastroFuncionario.php" method="POST" enctype="multipart/form-data">
        <fieldset>
			<P style="font-size: 20px;">Nome do funcionário: <input type="text" placeholder="Digite o nome do funcionário" name="nome_funcionario">
			<P style="font-size: 20px;">Data de nascimento: <input type="date" placeholder=" Digite a data de nascimento" name="nascimento_funcionario">
			<P style="font-size: 20px;">RG: <input type="text" placeholder=" Digite o RG do funcionário" name="rg_funcionario">
			<P style="font-size: 20px;">CPF: <input type="text" placeholder=" Digite o CPF do funcionário" name="cpf_funcionario">
			<p style="font-size: 20px;">Gênero:
			<select name="genero_funcionario" style="background-color: #DDDDDD;">
				<option value="0">Selecione</option>
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
			</select>
				Outro: <input type="text" name="outrogenero">
			</p>
			<p style="font-size: 20px;">E-mail: <input type="text" placeholder=" Digite o e-mail do cliente" name="email_funcionario"></p>
			<p style="font-size: 20px;">Telefone: <input type="text" placeholder=" Digite o telefone do cliente" name="telefone_funcionario"></p>
			<p style="font-size: 20px;">Observação: <input type="text" placeholder=" Digite uma observação" name="observacao_funcionario"></p>
			<p style="font-size: 20px;">Senha: <input type="password" placeholder=" Digite uma observação" name="senha_funcionario"></p>
			<br>
			<p style="font-size: 20px;">Endereço: <input type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalEndereco" value="Abrir caixa de informações" placeholder="Endereço">
			<p style="font-size: 20px;">Link da foto: <input name="userfile" type="file" /></p>
			<!--p style="font-size: 20px;">Estado:
				<select name= "seleção" style="background-color: #DDDDDD;">
					<option value="0">selecione</option>
					<option value="Santa Catarina">Santa Catarina</option>
					<option value="Rio Grande do Sul">Rio Grande do Sul</option>
				</select>
				Outro: <input type="text" name="outra_funcionario"-->
				</p>
				</p>
				<button type="submit" class="btn btn-primary">Enviar</button>
			<!--p style="font-size: 20px;">Cidade: <input type="text" placeholder=" Digite a cidade do funcionário" name="cidade_funcionario"></p>
			<p style="font-size: 20px;">Bairro: <input type="text" placeholder=" Digite o bairro do funcionário" name="bairro_funcionario"></p>
			<P style="font-size: 20px;">Rua: <input type="text" placeholder=" Digite a rua do funcionário" name="rua_funcionario"></P>
			<P style="font-size: 20px;">Número: <input type="text" placeholder=" Digite o número da casa" name="numerocasa_funcionario"></P>
			<p style="font-size: 20px;">Link da foto: <input type="text" placeholder=" Digite o link da foto" name="foto_funcionario"></p>
			<p style="font-size: 20px;">E-mail: <input type="text" placeholder=" Digite o e-mail do funcionário" name="email_funcionario"></p>
			<p style="font-size: 20px;">Telefone: <input type="text" placeholder=" Digite o telefone do funcionário" name="telefone_funcionario" ></p>
			<p style="font-size: 20px;">Observação: <input type="text" placeholder=" Digite uma observação" name="observação_funcionario"></p-->
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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Salvar</button>
						<!--button type="button" class="btn btn-primary"></button-->
					</div>
				</div>
			</div>
        </fieldset>
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