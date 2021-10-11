<?php

    include('./../backend/conexao.php');
                
    if (!$link) {
        die('Não foi possível conectar: ' . mysqli_error());
    }

    $q = $_POST['q'];