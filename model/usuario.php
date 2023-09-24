<?php
class Usuario{
    private $conn;
    private $nome;
    private $email;
    private $senha;
    private $telefone;

    function __construct($conn){
        $this->conn = $conn;
        
    }
    function get_nome(){
        return $this->nome;
    }
    function set_nome($nome){
        $this->nome = $nome; 
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_senha(){
        return $this->senha;
    }
    function set_senha($senha){
        $this->senha = $senha;
    }
    function get_telefone(){
        return $this->telefone;
    }
    function set_telefone($telefone){
        $this->telefone = $telefone;
    }
    function cadastrar($nome, $email, $senha, $telefone) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome, email, senha, telefone) VALUES 
            (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $nome, $email, $senhaHash, $telefone);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>