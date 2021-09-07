<?php 
    include('conexao.php');
    $nome = $_POST['nome_cliente'];
    $nascimento = $_POST['nascimento_cliente'];
    $rg_cliente = $_POST['rg_cliente'];
    $cpf_cliente = $_POST['cpf_cliente'];
    if($_POST['genero_cliente'] == "Masculino"){
        $genero_cliente = 1;
    }else if($_POST['genero_cliente'] == "Feminino"){
        $genero_cliente = 2;
    }

    $tipo_fisico = $_POST['tipo_fisico'];
    if($tipo_fisico == "Ectomorfo"){
        $tipo_fisico = 1;
    }else if($tipo_fisico == "Mesomorfo"){
        $tipo_fisico = 2;
    }else if($tipo_fisico == "Endomorfo"){
        $tipo_fisico = 3;
    }

    $tipo_treino = $_POST['tipo_treino'];
    if($tipo_treino == "Musc"){
        $tipo_treino = 1;
    }else if($tipo_treino == "Func"){
        $tipo_treino = 2;
    }
    
    if($_POST['paga'] != ""){
        $pagamento = 1;
    }else{
        $pagamento = 2;
    }

    $email_cliente = $_POST['email_cliente'];
    $telefone = $_POST['telefone_cliente'];
    $observacao = $_POST['observação_cliente'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $uploaddir = './../files/';
    $nameFoto = basename($_FILES['userfile']['name']);
    $uploadfile = $uploaddir . $nameFoto;

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

        $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
        mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
        $idInserido=mysqli_insert_id($link);
        $sql2 = "INSERT INTO cliente (nome, data_nasc, rg, cpf, mensalidade, foto, email, fone, obs, genero, tipo_fisico, tipo_treino, endereco) 
        VALUES ('$nome', '$nascimento', '$rg_cliente', '$cpf_cliente', '$pagamento', '$nameFoto', '$email_cliente', '$telefone', 
        '$observacao', '$genero_cliente', '$tipo_fisico', '$tipo_treino', '$idInserido')";

        mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro");

        mysqli_close($link);
        echo "Cliente cadastrado com sucesso!";
    }else{
        echo "Possível ataque de upload de arquivo!\n";
    }
?>