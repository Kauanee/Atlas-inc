<?php
    include("conexao.php");

    session_start();

    //comando sql.
    $comando = $pdo->prepare("SELECT * FROM movies");
    //executa a consulta no banco de dados.


    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_movies = $comando->fetchAll();
    }else{
        echo("Não há Filmes cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>