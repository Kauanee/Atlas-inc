<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $datansc = $_POST["datansc"];
    $perm = $_POST["perm"];

 
    $comando = $pdo->prepare("UPDATE usuario SET email_usuario=:email, nome_usuario=:nome, cpf=:cpf, data_nascimento=:datansc, perm_admin=:perm WHERE cod_usuario = :codigo;");


    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':email',$email);
    $comando->bindValue(':cpf',$cpf);
    $comando->bindValue(':datansc',$datansc);
    $comando->bindValue(':perm',$perm);

   
    $comando->execute();

   
    unset($comando);
    unset($pdo);

    header("location:telalista.php");
?>