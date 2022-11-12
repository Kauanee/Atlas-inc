
<?php
    include("conexao.php");

    
    $comando = $pdo->prepare("SELECT *  FROM combo;");
    
    $comando->execute();

    
    if($comando->rowCount() >= 1)
    {
    
        $listar_combo = $comando->fetchAll();
    }else{
        echo("Não há Combos.");
    }
    unset($comando);
    unset($pdo);
?>