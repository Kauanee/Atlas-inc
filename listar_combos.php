<?php
    include("conexao.php");

    session_start();

    $comando = $pdo->prepare("SELECT * FROM combo");


    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_combos = $comando->fetchAll();
    }else{
        echo("Não há Combos cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>