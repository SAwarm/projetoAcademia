<?php 

    require_once('./conexao.php');
    $codigo_cliente = $_POST['codigo_cliente'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $maa = $_POST['maa'];
    $mab = $_POST['mab'];
    $mac = $_POST['mac'];
    $obs = $_POST['obs'];
    //$data = date('Y/m/d'); data_acompanhamento = '$data',
    $id = $_POST['id'];

    $sqlInsert = "UPDATE acompanhamento SET peso = '$peso', altura = '$altura',
    maa = '$maa', mab = '$mab', mac = '$mac',
    obs = '$obs', cliente =  '$codigo_cliente' where cod = '$id'";

    if(mysqli_query($link, $sqlInsert)){
        echo "true";
    }else{
        echo "false";
    }