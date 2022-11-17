<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT * FROM ingresso;");
    
    $comando->execute();

   
    if($comando->rowCount() >= 1)
    {
        $lista_pedidos = $comando->fetchAll();
    }else{
        echo("Não há pedidos cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>