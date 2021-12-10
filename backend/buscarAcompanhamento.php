<?php
    require_once('./conexao.php');
    $q = $_POST['q'];
        
    if(!empty($q)){
        $sql = "SELECT * from acompanhamento inner join cliente on acompanhamento.cliente = cliente.cod
        where cliente.nome LIKE '%$q%'";
    }

    $result = mysqli_query($link, $sql);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
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