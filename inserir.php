<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $datansc = $_POST["datansc"];
    $comando = $pdo -> prepare("INSERT INTO usuario (email_usuario, senha_usuario, nome_usuario, cpf, data_nascimento) VALUES(:email,:senha,:nome,:cpf,:datansc)");
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);
    $comando->bindValue(":nome",$nome);                                     
    $comando->bindValue(":cpf",$cpf);
    $comando->bindValue(":datansc",$datansc);                             

    $comando->execute();                               

    header("Location:catalogo.html");

    unset($comando);
    unset($pdo);
?>
