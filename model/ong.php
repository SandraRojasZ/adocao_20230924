<?php
class ong{
    private $conn;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;

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
    function get_endereco(){
        return $this->endereco;
    }
    function set_endereco($endereco){
        $this->endereco = $endereco;
    }

    function cadastrar($nome, $email, $senha, $telefone, $endereco) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO ong (nome, email, senha, telefone, endereco) VALUES 
            (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $nome, $email, $senhaHash, $telefone, $endereco);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>