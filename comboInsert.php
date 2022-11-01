<?php
    include("conexao.php");

    $tamanhoCombo = $_POST["tamanhoCombo"];
    $precoCombo = $_POST["precoCombo"];

    $imagem = $_FILES['ImagemCombo']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    $comando = $pdo -> prepare("INSERT INTO movies (nome_combo, preco_combo,imagem_combo) VALUES(:tamanhoCombo, :precoCombo, :conteudo)");
    $comando->bindValue(":tamanhoCombo",$nomeCombo); 
    $comando->bindValue(":precoCombo",$precoCombo);                                      
   

    $comando->bindValue(":conteudo", $base64);

    $comando->execute();                              

    unset($comando);
    unset($pdo);
?>