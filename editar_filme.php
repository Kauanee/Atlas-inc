<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
    include("listar_filme.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem de Filmes</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="estilo_editar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
<nav>
        <img src="imagens/logoverde.png" class="logo" alt="Receitas de Código">
    </nav>
<div class="logo_meio">
        <img src="imagens/cineville.png">
    </div>

    <div class="seus_pedidos">
    Edição de Filmes
    </div> 
    <div class="row justify-content-center align-items-centers mt-5">
        <div class="col-mx-auto text-center">
    <div class="formulario">
    <form action="editar_filmes.php?codigo=<?php echo $_GET['codigo'];?>" method="POST" enctype="multipart/form-data">
        <label class="text-light">Nome:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="nome" value="<?php echo $movies['nome_movies'];?>">
        <br>
        <label class="text-light">Descrição:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="descricao" value="<?php echo $movies['descricao_movies'];?>">
        <br>
        <label class="text-light">Categoria:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="categoria" value="<?php echo $movies['categoria_movies'];?>">
        <br>
        <label class="text-light">Classificação:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="classificacao" value="<?php echo $movies['classificacao_movies'];?>">
        <br> <br>
        <input type="file" name="imagem" multiple accept="image/*"> 
        <br><br>
        <input type="submit" class="btn btn-outline-light" value="Atualizar" name="submit">
    </form>
    <a href="pageListaFilmes.php" class="btn btn-outline-light">Voltar</a>
</div>
</div>
</div>
</body>
</html>