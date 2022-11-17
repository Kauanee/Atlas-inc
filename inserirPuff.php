<?php
    include("conexao.php");

    session_start();
    $codigo = $_SESSION["cod_usuario"];

    $puff = $_COOKIE["cadeiras"];
    $valortotal = $_COOKIE["valor"];
    $filme = $_GET["codigo"];

    $comando = $pdo -> prepare("INSERT INTO ingresso(puff_ingresso, filme_sessao, total_ingresso, fk_usuario)VALUES(:puff,:filme,:valortotal,:codigo);");

    $comando->bindValue(":puff",$puff);
    $comando->bindValue(":filme",$filme);                                        
    $comando->bindValue(":valortotal",$valortotal);
    $comando->bindValue(":codigo",$codigo);
    
    $comando->execute();                               

    unset($comando);
    unset($pdo);
    header("Location:forpag.php");
?>
