<?php
    include("conexao.php");

    $nomeCombo = $_POST["tamanhoCombo"];
    $preco_combo = $_POST["precoCombo"];

    $imagem = $_FILES['ImagemCombo']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);



    $comando = $pdo -> prepare("INSERT INTO combo(tamanho_combo,preco_combo,imagem_combo) VALUES(:tamanhoCombo,:precoCombo,:conteudo)");
    $comando->bindValue(":tamanhoCombo",$nomeCombo); 
    $comando->bindValue(":precoCombo",$preco_combo);                                      
   

    $comando->bindValue(":conteudo", $base64);

    $comando->execute();   
    
    header("location:pageCadCombo.php");

    unset($comando);
    unset($pdo);
?>