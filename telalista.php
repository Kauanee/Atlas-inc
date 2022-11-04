<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
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
    <link rel="stylesheet" href="estilo_listagem.css">
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
    Listagem
    </div> 
        <div class="cinza">
        
        <h3>Listar Usuários:</h3>
    <table border="1">
        <thead>
            <tr>
                <th class="txt">Código</th>
                <th class="txt">Email</th>
                <th class="txt">Senha</th>
                <th class="txt">Nome</th>
                <th class="txt">CPF</th>
                <th class="txt">Data Nasc</th>
                <th class="txt">Editar</th>
                <th class="txt">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_usuarios.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_usuarios)) {
                //seleciona linha por linha.
                foreach ($lista_usuarios as $linha) { ?>
                    <tr>
                        <td class="txt"> <?php echo $linha['cod_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['email_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['senha_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['nome_usuario']; ?></td>
                        <td class="txt"> <?php echo $linha['cpf']; ?></td>
                        <td class="txt"> <?php echo $linha['data_nascimento']; ?></td>
                        <td class="txt"> <a href="editar.php?codigo=<?php echo $linha['pk_usuario'];?> ">
                                <input class="txt" type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_usuario.php?codigo=<?php echo $linha['pk_usuario'];?> ">
                                <input class="txt" type="button" value="Excluir">
                            </a>
                        </td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>

        </div>
</body>
</html>