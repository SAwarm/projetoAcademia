<?php

    include('./conexao.php');

    if (!$link) {
    	die('Não foi possível conectar: ' . mysqli_error($link));
    }

    $action = $_POST['action'];

    if(!empty($action)){
        $q = $_POST['q'];
    
        if(!empty($q)){
            $query = "SELECT * from cliente inner join endereco on cliente.endereco = endereco.cod where cliente.cod = '$q'";
        }

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_array($result);

        //print_r($row);
        echo json_encode($row);
    }else{
        $q = $_POST['q'];
    
        if(!empty($q)){
            $query = "SELECT * from cliente where nome LIKE '%$q%'";
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