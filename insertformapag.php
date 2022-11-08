<?php
    include("conexao.php");

    session_start();
    $pag = $_GET["tipo"];
    $cod_cliente=$_SESSION["cod_usuario"];
    $comando = $pdo -> prepare("INSERT INTO tipo_pagamento(pag,id_usuario) VALUES(:p,:u)");  
 
    
    
    $comando->bindValue(":p",$pag);    
    $comando->bindValue(":u",$cod_cliente);  
    $comando->execute();

    if($pag == "pix"){
        header("Location:pagamentoPix.html");
    }
    if($pag == "boleto"){
        header("Location:pagamentoBoleto.html");
    }
    if($pag == "credito"){
        header("Location:pagamentoCartao.html");
    }
 


    unset($comando);
    unset($pdo);
    ?>