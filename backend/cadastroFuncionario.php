<?php

    $nome_funcionario = $_POST['nome_funcionario'];
    $nascimento_funcionario = $_POST['nascimento_funcionario'];
    $rg_funcionario = $_POST['rg_funcionario'];
    $cpf_funcionario = $_POST['cpf_funcionario'];

    if($_POST['genero_funcionario'] == "Masculino"){
        $genero_funcionario = 1;
    }else if($_POST['genero_funcionario'] == "Feminino"){
        $genero_funcionario = 2;
    }else  {
        $genero_funcionario = 3;
    }

    $email_funcionario = $_POST['email_funcionario'];
    $telefone_funcionario = $_POST['telefone_funcionario'];
    $observacao_funcionario = $_POST['observacao_funcionario'];
    $senha_funcionario = $_POST['senha_funcionario'];

    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];

    print_r($_POST);

    $uploaddir = './../files/';
    $nameFoto = basename($_FILES['userfile']['name']);
    $uploadfile = $uploaddir . $nameFoto;

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

        $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
        mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");

        $idInserido = mysqli_insert_id($link);

        $sql2 = "INSERT INTO funcionario (nome, data_nasc, rg, cpf, foto, email, fone, obs, genero, endereco, senha) 
        VALUES ('$nome_funcionario', '$nascimento_funcionario', '$rg_funcionario', '$cpf_funcionario', '$nameFoto', '$email_funcionario', '$telefone_funcionario', 
        '$observacao_funcionario', '$genero_cliente', '$idInserido', '$senha_funcionario')";

        mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro");
        mysqli_close($link);
        echo "Cliente cadastrado com sucesso!";

    }else{
        echo "Erro ao fazer o upload da foto!\n";
    }
    
    

?>