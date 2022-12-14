<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estiloCadFilme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
<body>
<nav>
        <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
        <ul>
            <li>
                <a href="pageCadFilme.php">Cadastrar Filmes</a>
            </li>
            <li>
                <a href="telalista.php">Verificar Perfis</a>
            </li>
            <li>
                <a href="pageListaFilmes.php">Listar Filmes</a>
            </li>  
        </ul>
    </nav>

<div class="row">
        <div class="col-md-6 col-xs-12 coluna1">
            <img id="logo" src="imagens//cineville.png" width="550px">
            <h1 class="bg cine">CineVille, trazendo o conforto e a magia do cinema que <br> você merece! </h1>
            <img src="imagens//pipoquinha.png" width="400px" height="400px">
        </div>
        <div class="col-md-6 col-xs-12 coluna2">
            <div class="bg verde">
                <div class="bg preto">
                    <div class="conteudo">

                        <label class="bem"> <b>Bem vindo Administrador!</b> </label>
                        <br>
                        <br>
                        <form action="movieInsert.php" method="POST" enctype="multipart/form-data">
                            <label>Nome do Filme:</label>
                            <br>
                            <input name="filme" style="height: 20px; border-radius: 10px" class="w-50 p-3"
                                type="form-control" type="text" placeholder="Insire Nome do Filme!"/>
                            <br>
                            <br>
                            <label>Classificação:</label>
                            <br>
                            <input style="height: 20px; border-radius: 10px" class="w-50 p-3" type="form-control"
                                name="classificacao" type="text" placeholder="Insira a Classificação!"/>
                                <br>
                            <br>
                            <label>Descrição:</label>
                            <br>
                            <input style="height: 20px; border-radius: 10px" class="w-50 p-3" type="form-control"
                                name="descricao" type="text" placeholder="Insira a Descrição!"/>
                                <br>
                            <br>
                            <label>Cartaz:</label>
                            <br>
                            <input class="w-50 p-3" type="file" name="cartaz"/>
                                <br>
                            <br>
                            <label>Categoria:</label>
                            <br>
                            <input style="height: 20px; border-radius: 10px" class="w-50 p-3 " type="form-control"
                                name="categoria" type="text" placeholder="Insira a Categoria!"/>
                                <br>
                                <br>
                            <input type="submit" class="btn btn-outline-light" value="Inserir"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>