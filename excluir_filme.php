<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    //comando sql.
    $comando = $pdo->prepare("DELETE FROM movies WHERE cod_movies = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:pageListaFilmes.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>