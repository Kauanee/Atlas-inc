<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare("SELECT cod_movies, nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies  FROM movies WHERE cod_movies = :codigo");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue('codigo',$codigo);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $movies = $comando->fetch();
    }else{
        echo("Não há Filmes Cadastrados.");
    }

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
    ?>