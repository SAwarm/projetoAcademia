<?php 

    $senha = $_POST['senha'];
    $email = $_POST['email'];
    include_once("conexao.php");

    $sqlConsulta = "SELECT * from funcionario where email = '$email' and senha = '$senha'";
    $cont = mysqli_query($link, $sqlConsulta);
    //print_r(mysqli_fetch_array($cont));
    $result = mysqli_fetch_array($cont);
    if(empty($result)){
        echo "Usuário ou senha incorretos";
    }else{
        session_start();
        $_SESSION["logado"] = true;
        $nome = $result['nome'];
        $_SESSION['nome'] = $nome;
        echo "Bem vindo ".$nome;
    }
