<?php

    require_once("./conexao.php");
    $id = $_POST['q'];

    $sqlDelete = "DELETE from cliente where cod = '$id'";

    if(mysqli_query($link, $sqlDelete)){
        echo "true";
    }else{
        echo "false";
    }