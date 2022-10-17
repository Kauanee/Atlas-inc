<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $senha = MD5($_POST["senha"]);
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $datansc = $_POST["datansc"];

    $comando = $pdo -> prepare("UPDATE usuario SET nome_usuario = :nome, data_nascimento = :datansc, senha_usuario = :senha, email_usuario = :email, cpf = :cpf  WHERE cod_usuario = :usuario");

    $comando->bindValue(":nome",$nome);    
    $comando->bindValue(":senha",$senha);                                 
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":cpf",$cpf);
    $comando->bindValue(":datansc",$datansc);
    
    session_start();
    $comando-> bindValue(":usuario",$_SESSION["cod_usuario"]);
    
    $comando-> execute();                               

    header("Location:PagePerfil.html");
?>