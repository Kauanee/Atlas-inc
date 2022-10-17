<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $senha = MD5($_POST["senha"]);
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $datansc = $_POST["datansc"];
    $comando = $pdo -> prepare("UPDATE INTO usuario (nome_usuario,data_nascimento, senha_usuario,email_usuario,cpf, ) VALUES(:nome,:datansc:senha,:email,:cpf,)");
    $comando->bindValue(":nome",$nome);                                     
    $comando->bindValue(":data",$data);
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":cpf",$cpf);
    $comando->bindValue(":datansc",$datansc);                             

    $comando->execute();                               

    header("Location:catalogo.html");
?>
