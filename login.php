<?php
include("conexao.php");

$email =$_POST["email"];
$set_senha =$_POST["senha"];

$comando = $pdo->prepare("SELECT cod_usuario, senha_usuario, perm_admin FROM usuario WHERE email_usuario = :email");

$comando->bindValue(":email",$email);
$comando->execute();

if($comando->rowCount()==1)
{
    $resultado = $comando->fetch();
    if($resultado['senha_usuario']== MD5($set_senha)){
        if ($resultado['perm_admin'] == 1) {
            header("Location:pageCadFilme.php");
        } else {
            header("Location:catalogo.html");
        }
            
            

       session_start();
       $_SESSION['cod_usuario'] = $resultado['cod_usuario'];
       $_SESSION['perm_admin'] = $resultado['perm_admin'];
       $_SESSION['loggedin'] = true;

    }else{
        echo("Email incorreto!");
        echo($email);
        echo($set_senha);
        echo(MD5($set_senha));

    }
}else{
 echo("Senha incorreta!");

}

unset($comando);
unset($pdo);

?>