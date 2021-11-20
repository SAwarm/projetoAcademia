<?php 
    require_once('./conexao.php');
    if(!empty($_POST['q'])){
        $q = $_POST['q'];
        $sql = "SELECT * from acompanhamento inner join cliente on acompanhamento.cliente = cliente.cod where acompanhamento.cod = '$q'";
        
        $result = mysqli_query($link, $sql);
        
        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }

    }else{
        $sql = "SELECT * from acompanhamento inner join cliente on acompanhamento.cliente = cliente.cod";
        
        $result = mysqli_query($link, $sql);
        
        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }
    }