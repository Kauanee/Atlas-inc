<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    //comando sql.
    $comando = $pdo->prepare("DELETE FROM usuario WHERE cod_usuario = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:telalista.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>