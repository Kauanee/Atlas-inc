<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT nome_usuario, email_usuario, senha_usuario, cpf, data_nascimento, perm_admin FROM usuario WHERE cod_usuario = :codigo");
    
    $comando->bindValue('codigo',$codigo);

    $comando->execute();

    if($comando->rowCount() >= 1)
    {

        $usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }


    unset($comando);
    unset($pdo);
    ?>