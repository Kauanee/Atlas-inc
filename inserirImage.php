<?php
    include("conexao.php");

        
    $imagem = $_FILES['imagem']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    $comando = $pdo -> prepare("INSERT INTO usuario(imagem_usuario) VALUES(:conteudo)");  
                                   
    $comando->bindValue(":conteudo", $base64);

    $comando->execute();

    header("Location:pag.php");

    unset($comando);
    unset($pdo);
?>