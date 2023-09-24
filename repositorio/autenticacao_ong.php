<?php
class autenticacao_ong {
    private $conexao;
    public function __construct($conexao) {
        $this->conexao = $conexao;        
    }
    public function verificarOng($email, $senha) {
        $query = "SELECT * FROM ong WHERE email = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();
            if (password_verify($senha, $usuario['senha'])) {
                return $usuario;
            }
        }
        return false;  
    }
}
?>