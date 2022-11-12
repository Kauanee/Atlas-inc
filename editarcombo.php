<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
    include("listar_combo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem de Combos</title>
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
    Edição de Combos
    </div> 
    <div class="row justify-content-center align-items-centers mt-5">
        <div class="col-mx-auto text-center">
    <div class="formulario">
    <form action="editarcombos.php?codigo=<?php echo $_GET['codigo'];?>" method="POST" enctype="multipart/form-data">
        <label class="text-light">Tamanho:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="tamanho" value="<?php echo $combo['tamanho_combo'];?>">
        <br>
        <label class="text-light">Preço:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="preco" value="<?php echo $combo['preco_combo'];?>">
        <br>
        <br>
        <input type="file" name="imagem" multiple accept="image/*"> 
        <br><br>
        <input type="submit" class="btn btn-outline-light" value="Atualizar" name="submit">
        <br><br>
    </form>
    <a href="telalistacombo.php" class="btn btn-outline-light">Voltar</a>
</div>
</div>
</div>
</body>
</html>