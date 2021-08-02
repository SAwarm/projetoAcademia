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

<div class="container" style="margin-top: 5%; margin-bottom: 5%;">
  <div class="row">
    <div class="col-sm-12">
    

     <h2>Cadastro de funcionários</h2><br><br>
     <form action="cliente.php" method="POST">
        <fieldset >
          

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
				<br>
				<p style="text-transform: uppercase; font-size: 20px;"><strong>Endereço</strong></p>
				<p style="font-size: 20px;">Estado:
							<select name= "seleção" style="background-color: #DDDDDD;">
								<option value="0">selecione</option>
								<option value="Santa Catarina">Santa Catarina</option>
								<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							</select>
							outra: <input type="text" name="outra_funcionario">
					</p>
					</p>
					<p style="font-size: 20px;">Cidade: <input type="text" placeholder=" Digite a cidade do funcionário" name="cidade_funcionario"></p>
					<p style="font-size: 20px;">Bairro: <input type="text" placeholder=" Digite o bairro do funcionário" name="bairro_funcionario"></p>
					<P style="font-size: 20px;">Rua: <input type="text" placeholder=" Digite a rua do funcionário" name="rua_funcionario"></P>
					<P style="font-size: 20px;">Número: <input type="text" placeholder=" Digite o número da casa" name="numerocasa_funcionario"></P>
					<p style="font-size: 20px;">Link da foto: <input type="text" placeholder=" Digite o link da foto" name="foto_funcionario"></p>
					<p style="font-size: 20px;">E-mail: <input type="text" placeholder=" Digite o e-mail do funcionário" name="email_funcionario"></p>
					<p style="font-size: 20px;">Telefone: <input type="text" placeholder=" Digite o telefone do funcionário" name="telefone_funcionario" ></p>
					<p style="font-size: 20px;">Observação: <input type="text" placeholder=" Digite uma observação" name="observação_funcionario"></p>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
      </form><br>
  
   </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0;">
  <p>JR Fitness system</p>
  <p>Sistema de controle de clientes</p>
</div>

</body>
</html>