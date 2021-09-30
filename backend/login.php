<?php 

    $senha = $_POST['senha'];
    $email = $_POST['email'];
    include_once("conexao.php");

    $sqlConsulta = "SELECT * from funcionario where email = ".$email." and senha = ".$senha."";
    $cont = mysqli_query($link, $sqlConsulta);

    if($cont == false){
        echo "Usuário ou senha incorretos";
    }else{
        session_start();
        $_SESSION["logado"] = true;
        echo "Logado no sistema";
        
    }
?>