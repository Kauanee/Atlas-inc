<?php
    include("conexao.php");

    $codigo = $_GET["codigo"];

    //comando sql.
    $comando = $pdo->prepare("SELECT cod_movies, nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies  FROM movies WHERE cod_movies = :codigo");
    //executa a consulta no banco de dados.
    $comando->bindValue(":codigo",$codigo);

    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $listar_filme = $comando->fetch();
    }else{
        echo("Não há Filmes.");
    }
    //unset($comando);
    //unset($pdo);

    header("location:pageDescFilm.php");

?>