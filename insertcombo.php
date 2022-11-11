<?php
    include("conexao.php");

    session_start();
    $combo = $_SESSION['cod_combo'];

    $puff = $_COOKIE["cadeiras"];
    $valortotal = $_COOKIE["valor"];
    $filme = $_POST["filme"];
    $comando = $pdo -> prepare("INSERT INTO ingresso (puff_ingresso, filme_sessao, total_ingresso, fk_usuario) VALUES(:puff,:filme,:total,:usuario)");
    $comando->bindValue(":puff",$puff); 
    $comando->bindValue(":filme",$filme);                                      
    $comando->bindValue(":total",$valortotal);  
    $comando->bindValue(":usuario",$usuario);                        

    $comando->execute();                               

    unset($comando);
    unset($pdo);
    header("Location:forpag.php");
?>
