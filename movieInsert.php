<?php
    include("conexao.php");

    $nomeFilme = $_POST["nomeFilme"];
    $classificacao = $_POST["classificacao"];
    $descricao = $_POST["descricao"];
    $cartaz = $_FILE["cartaz"];
    $categoria = $_POST["categoria"];

    $filme = $_POST["filme"];
    $comando = $pdo -> prepare("INSERT INTO movies (nome_movies, classificacao_movies, descricao_movies, cartaz_movies, categoria_movies) VALUES(:nomeFilme,:classificacao,:cartaz,:categoria)");
    $comando->bindValue(":nomeFilme",$nomeFilme); 
    $comando->bindValue(":classificacao",$classificacao);                                      
    $comando->bindValue(":cartaz",$cartaz);  
    $comando->bindValue(":categoria",$categoria);                        

    $comando->execute();                               

    header("Location:pageCadFilme.php");
?>
