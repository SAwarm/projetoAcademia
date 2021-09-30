<?php

    $nome_funcionario = $_POST['nome_funcionario'];
    $nascimento_funcionario = $_POST['nascimento_funcionario'];
    $rg_funcionario = $_POST['rg_funcionario'];
    $cpf_funcionario = $_POST['cpf_funcionario'];

    if($_POST['genero_funcionario'] == "Masculino"){
        $genero_funcionario = 1;
    }else if($_POST['genero_funcionario'] == "Feminino"){
        $genero_funcionario = 2;
    }

    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];

    print_r($_POST);
    

?>