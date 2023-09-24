<?php
include '../repositorio/conexao.php';
include '../repositorio/autenticacao_ong.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $login = new autenticacao_ong($conn);   
    $usuario = $login->verificarOng($email, $senha);
    
    
    if ($usuario){
        $_SESSION["usuario"] = $usuario;
        header("Location: login-sucesso.php");
        exit;
    }else{
 
        header("Location: login-ong.php?erro=1");

    }
}
?>