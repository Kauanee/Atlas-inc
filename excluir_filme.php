<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
   
    $comando = $pdo->prepare("DELETE FROM movies WHERE cod_movies = :codigo;");


    $comando->bindValue(':codigo',$codigo);
    

    $comando->execute();


    header("location:pageListaFilmes.php");


    unset($comando);
    unset($pdo);
?>