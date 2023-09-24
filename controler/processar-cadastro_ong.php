<?php
include '../repositorio/conexao.php';
include '../model/ong.php';

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    if ($senha === $confirmarsenha) {
        //conexão com o banco de dados;
        $usuario = new ong($conn);
        //cadastrar o usuário
        if ($usuario->cadastrar($nome, $email, $senha, $telefone, $endereco)) {
            // Redirecionar para a página de sucesso após o cadastro            
            header("Location: cadastro-sucesso.php");
            exit();
        } else {
            echo "erro! tente novamente!";
        }
    }else{
        header("Location: ../view/login.php?erro=1");
    } 
}
?>