<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT cod_usuario, email_usuario,senha_usuario, nome_usuario, cpf, data_nascimento, perm_admin  FROM usuario WHERE cod_usuario=:cod_usuario;");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":cod_usuario", $_SESSION['cod_usuario']);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $informacoes_usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }

    unset($comando);
    unset($pdo);

  
?>