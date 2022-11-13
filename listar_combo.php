<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];


    $comando = $pdo->prepare("SELECT * FROM combo WHERE cod_combo = :codigo");
    
    $comando->bindValue(':codigo',$codigo);

    $comando->execute();

   
    if($comando->rowCount() >= 1)
    {
    
        $combos = $comando->fetch();
    }else{
        echo("Não há Combo Cadastrados.");
    }

    unset($comando);
    unset($pdo);
    ?>