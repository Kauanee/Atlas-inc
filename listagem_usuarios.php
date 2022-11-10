<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT cod_usuario, email_usuario,senha_usuario, nome_usuario, cpf, data_nascimento, perm_admin  FROM usuario WHERE cod_usuario=:cod_usuario;");
    
    $comando->bindValue(":cod_usuario", $_SESSION['cod_usuario']);

    $comando->execute();

    if($comando->rowCount() >= 1)
    {

        $informacoes_usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }

    unset($comando);
    unset($pdo);

  
?>