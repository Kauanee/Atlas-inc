<?php
include("conexao.php");

$email =$_POST["email"];
$set_senha =$_POST["senha"];

$comando = $pdo->prepare("SELECT cod_usuario, senha_usuario, login_usuario, perm_admin FROM usuario WHERE email_usuario = :email");

$comando->bindValue(":email",$email);
$comando->execute();

if($comando->rowCount() == 1){
    $resultado = $comando->fetch();

    if($resultado['senha_usuario'] == MD5($set_senha)){
       header("Location:pageCadFilme.php");

       session_start();
       $_SESSION['cod_usuario'] = $resultado['cod_usuario'];
       $_SESSION['perm_admin'] = $resultado['perm_admin'];
       $_SESSION['loggedin'] = true;

    }else{
        echo("Email ou senha incorreto");
    }
}else{
 echo("Email ou senha incorreto");

}

unset($comando);
unset($pdo);

?>