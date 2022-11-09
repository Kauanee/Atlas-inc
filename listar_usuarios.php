<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT cod_usuario, email_usuario, senha_usuario, nome_usuario, cpf, data_nascimento, perm_admin FROM usuario;");
    $comando->execute();

   
    if($comando->rowCount() >= 1)
    {
        $lista_usuarios = $comando->fetchAll();
    }else{
        echo("Não há usuários cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>