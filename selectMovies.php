<?php
    include("conexao.php");

    
    $comando = $pdo->prepare("SELECT *  FROM movies;");
    
    $comando->execute();

    
    if($comando->rowCount() >= 1)
    {
    
        $listar_filmes = $comando->fetchAll();
    }else{
        echo("Não há Filmes.");
    }
    unset($comando);
    unset($pdo);
?>