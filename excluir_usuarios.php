<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    //comando sql.
    // Insira o comando SQL aqui.
    $comando= $pdo-> prepare("DELETE FROM usuario WHERE cod_usuario =:codigo");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();
    
      //Fecha declaração e conexão.
      unset($comando);
      unset($pdo);
      
    //redireciona para a pagina informada.
    header("location:listagem_usuarios.php");

  
?>