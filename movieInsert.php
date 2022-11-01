<?php
    include("conexao.php");

    $nomeFilme = $_POST["filme"];
    $classificacao = $_POST["classificacao"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];

    $imagem = $_FILES['cartaz']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    $comando = $pdo -> prepare("INSERT INTO movies(nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies) VALUES(:filme, :classificacao, :descricao, :conteudo, :categoria)");
    $comando->bindValue(":filme",$nomeFilme); 
    $comando->bindValue(":classificacao",$classificacao);                                      
    $comando->bindValue(":descricao",$descricao);  
    $comando->bindValue(":categoria",$categoria);
    
    $comando->bindValue(":conteudo", $base64);

    $comando->execute();                              

    header("location:pageCadFilme.php");

    unset($comando);
    unset($pdo);
?>