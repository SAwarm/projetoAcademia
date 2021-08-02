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

<?php
    include('./../backend/conexao.php');
    
      if (!$link) {
        die('Não foi possível conectar: ' . mysqli_error());
    }
    print_r($link);
    mysqli_close($link);
?>

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
    

     <h2>Cadastro de clientes</h2><br><br>
     <form action="cliente.php" method="POST">
        <fieldset >
          

        <P style="font-size: 20px;">Nome do Cliente: <input type="text" placeholder=" Digite o nome do cliente" name="nome_cliente">

        <P style="font-size: 20px;">Data de Nascimento: <input type="date" placeholder=" Digite a data de nascimento" name="nascimento_cliente">

        <P style="font-size: 20px;">RG: <input type="text" placeholder=" Digite o RG do cliente" name="rg_cliente">

        <P style="font-size: 20px;">CPF: <input type="text" placeholder=" Digite o CPF do cliente" name="cpf_cliente">

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
        <br>
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
          <p style="font-size: 20px;">Link da foto: <input type="text" placeholder=" Digite o link da foto do cliente" name="foto_cliente"></p>
          <p style="font-size: 20px;">E-mail: <input type="text" placeholder=" Digite o e-mail do cliente" name="email_cliente"></p>
          <p style="font-size: 20px;">Telefone: <input type="text" placeholder=" Digite o telefone do cliente" name="telefone_cliente"></p>
          <p style="font-size: 20px;">Observação: <input type="text" placeholder=" Digite uma observação" name="observação_cliente"></p>
        </p>
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