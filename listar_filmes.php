<?php
    include("conexao.php");

    session_start();

    $comando = $pdo->prepare("SELECT * FROM movies");


    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_movies = $comando->fetchAll();
    }else{
        echo("Não há Filmes cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>