<?php
include("listar_usuario.php");

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Página Listagem</title>
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
    Edição de Usuários
    </div> 
    <div class="row justify-content-center align-items-centers mt-5">
        <div class="col-mx-auto text-center">

    <div class="formulario">
    <form action="editar_usuario.php?codigo=<?php echo $_GET['codigo'];?>" method="POST" enctype="multipart/form-data">
        <label class="text-light">Nome:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="nome" value="<?php echo $usuario['nome_usuario']?>">
        <br>
        <label class="text-light">Email:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="email" value="<?php echo $usuario['email_usuario']?>">
        <br>
        <label class="text-light">CPF:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="cpf" value="<?php echo $usuario['cpf']?>">
        <br>
        <label class="text-light">Data Nascimento:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="datansc" value="<?php echo $usuario['data_nascimento']?>">
        <br>
        <label class="text-light">Permissão Admin:</label>
        <br>
        <input type="text" style="width:300px;" class="text-center" name="perm" value="<?php echo $usuario['perm_admin']?>">
        <br><br>
        <input type="submit" value="Atualizar" name="submit">
    </form>
    <br>
    <a href="telalista.php" class="voltar">Voltar</a>
</div>
</div>
</div>
</body>
</html>