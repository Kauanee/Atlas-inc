<?php
    include("conexao.php");

    $nomeCombo = $_POST["nomeCombo"];
    $precoCombo = $_POST["precoCombo"];

    $imagem = $_FILES['ImagemCombo']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    $comando = $pdo -> prepare("INSERT INTO produtos(nome_combo, preco_combo,imagem_combo) VALUES(:combo, :preco, :conteudo)");
    $comando->bindValue(":combo",$nomeCombo); 
    $comando->bindValue(":preco",$precoCombo);                                      
   

    $comando->bindValue(":conteudo", $base64);

    $comando->execute();                              

    unset($comando);
    unset($pdo);
?>