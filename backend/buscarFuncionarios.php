<?php

    include('./../backend/conexao.php');
            
    if (!$link) {
    	die('Não foi possível conectar: ' . mysqli_error());
    }

    $action = $_POST['action'];

    if(!empty($action)){
        $q = $_POST['q'];
    
        if(!empty($q)){
            $query = "SELECT * from funcionario inner join endereco on funcionario.endereco = endereco.cod
            inner join tipo_fisico on tipo_fisico.cod = cliente.tipo_fisico inner join tipo_treino on 
            tipo_treino.cod = cliente.tipo_treino 
            where funcionario.cod = '$q'";
        }

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_array($result);

        //print_r($row);
        echo json_encode($row);
    }else{
        $q = $_POST['q'];
    
        if(!empty($q)){
            $query = "SELECT * from funcionario where nome LIKE '%$q%'";
        }

        $result = mysqli_query($link, $query);

        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }
        if($result != false){
            $result_sql = mysqli_fetch_array($result);
        }

        if(!empty($rows)){
            if($q == ""){
                echo "null";
            }else{
                echo json_encode($rows);
            }
        }else{
            echo "null";
        }
    }
        
?>