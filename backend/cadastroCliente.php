<?php 
    include('conexao.php');

    if(!empty($_POST['inputHidden'])){
        $nome = $_POST['nome_cliente'];
        $nascimento = $_POST['nascimento_cliente'];
        $rg_cliente = $_POST['rg_cliente'];
        $cpf_cliente = $_POST['cpf_cliente'];
        if($_POST['genero_cliente'] == "Masculino"){
            $genero_cliente = 1;
        }else if($_POST['genero_cliente'] == "Feminino"){
            $genero_cliente = 2;
        }else{
            $genero_cliente = 3;
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

        $idUpdate = $_POST['inputHidden'];
        $idUpdateEndereco = $_POST['inputHiddenEndereco'];
    
        if($_FILES['userfile']['name']){
    
            $uploaddir = './../files/';
            $nameFoto = basename($_FILES['userfile']['name']);
            $uploadfile = $uploaddir . $nameFoto;
        
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        
                $sql = "UPDATE endereco SET rua ='$rua', numero = '$numero', bairro = '$bairro',
                cidade = '$cidade', estado = '$estado' where cod ='$idUpdateEndereco'";

                mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
        
                $idInserido = mysqli_insert_id($link);
        
                $sql2 = "UPDATE cliente SET nome = '$nome', data_nasc = '$nascimento', rg ='$rg_cliente',
                cpf = '$cpf_cliente', mensalidade = '$pagamento', foto = '$nameFoto', email = '$email_cliente',
                fone = '$telefone', obs = '$observacao', genero = '$genero_cliente', tipo_fisico = '$tipo_fisico',
                tipo_treino = '$tipo_treino' where cod = '$idUpdate'";
        
                mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro");
                mysqli_close($link);
                echo "Cliente cadastrado com sucesso!";
        
            }else{
                echo "Erro ao fazer o upload da foto!\n";
            }
        }else{
            $sql = "UPDATE endereco SET rua ='$rua', numero = '$numero', bairro = '$bairro',
            cidade = '$cidade', estado = '$estado' where cod ='$idUpdateEndereco'";

            mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro endereço");
    
            $idInserido = mysqli_insert_id($link);
    
            $sql2 = "UPDATE cliente SET nome = '$nome', data_nasc = '$nascimento', rg ='$rg_cliente',
            cpf = '$cpf_cliente' where cod = '$idUpdate'";
    
            mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro cliente");
            mysqli_close($link);
            echo "Cliente cadastrado com sucesso!";
        }
    }else{
        $nome = $_POST['nome_cliente'];
        $nascimento = $_POST['nascimento_cliente'];
        $rg_cliente = $_POST['rg_cliente'];
        $cpf_cliente = $_POST['cpf_cliente'];
        if($_POST['genero_cliente'] == "Masculino"){
            $genero_cliente = 1;
        }else if($_POST['genero_cliente'] == "Feminino"){
            $genero_cliente = 2;
        }else{
            $genero_cliente = 3;
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
    
        if($_FILES['userfile']['name']){
    
            $uploaddir = './../files/';
            $nameFoto = basename($_FILES['userfile']['name']);
            $uploadfile = $uploaddir . $nameFoto;
        
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        
                $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
                mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
        
                $idInserido = mysqli_insert_id($link);
        
                $sql2 = "INSERT INTO cliente (nome, data_nasc, rg, cpf, mensalidade, foto, email, fone, obs, genero, tipo_fisico, tipo_treino, endereco) 
                VALUES ('$nome', '$nascimento', '$rg_cliente', '$cpf_cliente', '$pagamento', '$nameFoto', '$email_cliente', '$telefone', 
                '$observacao', '$genero_cliente', '$tipo_fisico', '$tipo_treino', '$idInserido')";
        
                mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro");
                mysqli_close($link);
                echo "Cliente cadastrado com sucesso!";
        
            }else{
                echo "Erro ao fazer o upload da foto!\n";
            }
        }else{
            $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
            mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
    
            $idInserido = mysqli_insert_id($link);
    
            $sql2 = "INSERT INTO cliente (nome, data_nasc, rg, cpf, mensalidade, email, fone, obs, genero, tipo_fisico, tipo_treino, endereco) 
            VALUES ('$nome', '$nascimento', '$rg_cliente', '$cpf_cliente', '$pagamento', '$email_cliente', '$telefone', 
            '$observacao', '$genero_cliente', '$tipo_fisico', '$tipo_treino', '$idInserido')";
    
            mysqli_query($link, $sql2) or die("Erro ao tentar cadastrar registro");
            mysqli_close($link);
            echo "Cliente cadastrado com sucesso!";
        }
    }
   
?>