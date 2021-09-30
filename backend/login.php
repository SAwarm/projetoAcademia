<?php 

    $senha = $_POST['senha'];
    $email = $_POST['email'];
    include_once("conexao.php");

    $sqlConsulta = "SELECT * from funcionario where email = '$email' and senha = '$senha'";
    $cont = mysqli_query($link, $sqlConsulta);
    //print_r(mysqli_fetch_array($cont));
    if($cont == false){
        echo "Usuário ou senha incorretos";
    }else{
        //session_start();
        //$_SESSION["logado"] = true;
        $nome =  mysqli_fetch_array($cont);
        $nome = $nome['nome'];
        echo "Bem vindo " .$nome;
        
    }
?>