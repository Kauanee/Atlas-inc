<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    $comando = $pdo->prepare("DELETE FROM usuario WHERE cod_usuario = :codigo;");
 
    $comando->bindValue(':codigo',$codigo);
    
    $comando->execute();

    header("location:telalista.php");

    unset($comando);
    unset($pdo);
?>