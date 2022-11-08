<?php
    include("conexao.php");

    
    $pag = $_POST["tipo"];

    $comando = $pdo -> prepare("INSERT INTO tipo_pagamento(pag) VALUES(:pag,)");  
    
    
    $comando->bindValue(":pag",$pag);    
    $comando->execute();

    
    header("Location:pagamentoBoleto.html");


    unset($comando);
    unset($pdo);
    ?>