<?php

    include('./../backend/conexao.php');
            
    if (!$link) {
    	die('Não foi possível conectar: ' . mysqli_error());
    }

    $q = $_POST['q'];
    
    if(!empty($q)){
        $query = "DELETE * from funcionario where cod = '$q'";
    }

    $result = mysqli_query($link, $query) or die("Erro ao tentar cadastrar registro");

    header("Location: ./../telas/cadastro_funcionario.php");