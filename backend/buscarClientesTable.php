<?php

    include('./../backend/conexao.php');
    
    if (!$link) {
        die('Não foi possível conectar: ' . mysqli_error());
    }
    
    $query = "SELECT * from cliente LIMIT 10";
    $result = mysqli_query ($link, $query);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }
    if($result != false){
        $result_sql = mysqli_fetch_array($result);
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }