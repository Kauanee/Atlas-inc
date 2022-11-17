<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    $comando = $pdo->prepare("DELETE FROM ingresso WHERE cod_ingresso = :codigo;");
 
    $comando->bindValue(':codigo',$codigo);
    
    $comando->execute();

    header("location:pageListaPedidos.php");

    unset($comando);
    unset($pdo);
?>