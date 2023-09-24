<?php
class Animais{
    private $conn;
    private $nome_pet;
    private $sexo;
    private $tipo;
    private $porte;
    private $ano;
    private $endereco;
    private $ong;

    function __construct($conn, $tipo, $nomePet, $sexo, $porte, $ano, $endereco, $ong){
        $this->conn = $conn;
        $this->tipo = $tipo;
        $this->nomePet = $nomePet;
        $this->sexo = $sexo;
        $this->porte = $porte;
        $this->ano = $ano;
        $this->endereco = $endereco;
        $this->ong = $ong;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getNome_Pet() {
        return $this->nome_pet;
    }

    public function setNome_Pet($nome_pet) {
        $this->nome_pet = $nome_pet;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getPorte() {
        return $this->porte;
    }

    public function setPorte($porte) {
        $this->porte = $porte;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getOng() {
        return $this->ong;
    }

    public function setOng($ong) {
        $this->ong = $ong;
    }
    function cadastrar($tipo, $nome_pet, $sexo, $porte, $ano, $endereco, $ong) {
        $sql = "INSERT INTO animais (tipo, nome_pet, sexo, porte, ano, endereco, ong) VALUES 
            (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssiss", $tipo, $nome_pet, $sexo, $porte, $ano, $endereco, $ong);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>