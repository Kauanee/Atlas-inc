<?php
    include("conexao.php");

    $filme = $_POST["filme"];
    $comando = $pdo -> prepare("INSERT INTO ingresso (puff_ingresso, filme_sessao, total_ingresso, fk_usuario) VALUES(:puff,:filme,:total,:usuario)");
    $comando->bindValue(":puff",$puff); 
    $comando->bindValue(":filme",$filme);                                      
    $comando->bindValue(":total",$valortotal);  
    $comando->bindValue(":usuario",$usuario);                        

    $comando->execute();                               

    header("Location:forpag.html");
?>
