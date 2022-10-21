<?php
    include("conexao.php");

        
    //atribuindo valores dos campos a variaveis.
    $imagem = $_FILES['imagem']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO usuario(imagem_usuario) VALUES(:conteudo)");  
    
    //insere valores das variaveis no comando sql.                                 
    $comando->bindValue(":conteudo", $base64);

    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:pagePerfil.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>