<?php
    require_once('./conexao.php');
    $codigo_cliente = $_POST['codigo_cliente'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $maa = $_POST['maa'];
    $mab = $_POST['mab'];
    $mac = $_POST['mac'];
    $obs = $_POST['obs'];
    $data = date('Y/m/d');

    $sqlInsert = "INSERT INTO acompanhamento (data_acompanhamento, peso, altura, maa, mab, mac, obs, cliente) 
    VALUES('$data', '$peso', '$altura', '$maa', '$mab', '$mac', '$obs', '$codigo_cliente')";

    if(mysqli_query($link, $sqlInsert)){
        echo "true";
    }else{
        echo "false";
    }
