<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $classificacao = $_POST["classificacao"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];

    $base64 = '';
    if(!isset($_FILES)){
        $imagem = $_FILES['imagem']; 
        $extensao = $imagem['type'];
        $conteudo = file_get_contents($imagem['tmp_name']);
        $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
    }

    //comando sql.
    $comando = $pdo->prepare("UPDATE movies SET nome_movies=:nome, classificacao_movies=:classi, descricao_movies=:descricao, cartaz_movies=:imagem, categoria_movies=:categoria WHERE cod_movies = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':classi',$classificacao);
    $comando->bindValue(':descricao',$descricao);
    $comando->bindValue(':imagem',$base64);;
    $comando->bindValue(':categoria',$categoria);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:pageListaFilmes.php");
?>