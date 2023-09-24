<?php
include '../repositorio/conexao.php';
include '../repositorio/autenticacao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $login = new autenticacao($conn);   
    $usuario = $login->verificarUsuario($email, $senha);
    
    
    if ($usuario){
        $_SESSION["usuario"] = $usuario;
        header("Location: login-sucesso.php");
        exit;
    }else{
 
        header("Location: ../view/login.php?erro=1");

    }
}
?>