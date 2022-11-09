<?php
    include("conexao.php");

    $codigo = $_GET["codigo"];

  
    $comando = $pdo->prepare("SELECT cod_movies, nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies  FROM movies WHERE cod_movies = :codigo");

    $comando->bindValue(":codigo",$codigo);

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        
        $listar_filme = $comando->fetch();
    }else{
        echo("Não há Filmes.");
    }
   

    header("location:pageDescFilm.php");

?>