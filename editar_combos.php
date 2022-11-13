<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $tamanho = $_POST["tamanho"];
    $preco = $_POST["preco"];

    $base64 = '';
    if(isset($_FILES)){
        $imagem = $_FILES['imagem']; 
        $extensao = $imagem['type'];
        $conteudo = file_get_contents($imagem['tmp_name']);
        $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
    }

    $comando = $pdo->prepare("UPDATE combo SET tamanho_combo=:tamanho, preco_combo=:preco, imagem_combo=:imagem WHERE cod_combo = :codigo;");

    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':tamanho',$tamanho);
    $comando->bindValue(':preco',$preco);
    $comando->bindValue(':imagem',$base64);;

    $comando->execute();

    unset($comando);
    unset($pdo);

    header("location:pageListaCombos.php");
?>