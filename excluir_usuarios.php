<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    $comando= $pdo-> prepare("DELETE FROM usuario WHERE cod_usuario =:codigo");

    $comando->bindValue(':codigo',$codigo);
    $comando->execute();
      unset($comando);
      unset($pdo);
      
    header("location:listagem_usuarios.php");

  
?>