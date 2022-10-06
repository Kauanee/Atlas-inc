<?php
    include("conexao.php");

    $puff = $_POST["puff"];
    $senha = MD5($_POST["senha"]);
    $filme = $_POST["filme"];
    $preco = $_POST["preco"];
    $comando = $pdo -> prepare("INSERT INTO ingresso (puff_sessao, nome_filme, preco) VALUES(:puff,:filme,:preco)");
    $comando->bindValue(":puff",$puff);                                     
    $comando->bindValue(":filme",$filme);
    $comando->bindValue(":preco",$preco);                                                                

    $comando->execute();                               

    header("Location:formpag.html");
?>