<?php
    include("conexao.php");

    $puff = $_COOKIE["cadeiras"];
    $valortotal = $_COOKIE["valor"];
    $filme = $_POST["filme"];
    $comando = $pdo -> prepare("INSERT INTO ingresso (puff_ingresso, filme_sessao, total_ingresso) VALUES(:puff,:filme,:total)");
    $comando->bindValue(":puff",$puff); 
    $comando->bindValue(":filme",$filme);                                      
    $comando->bindValue(":total",$valortotal);                          

    $comando->execute();                               

    header("Location:forpag.html");
?>
