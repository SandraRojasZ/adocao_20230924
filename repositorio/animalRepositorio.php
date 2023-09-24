<?php

class AnimaisRepositorio {
    private $conn; // Sua conexão com o banco de dados
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function cadastrarAnimal(Animais $tipo, $nomePet, $sexo, $porte, $ano, $endereco, $ong)
    {
        $sql = "INSERT INTO animais (tipo, nome_pet, 
        sexo, porte, ano, endereco, ong) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssiss", $tipo, $nomePet, $sexo, $porte, $ano, $endereco, $ong);
        if ($stmt->execute()){
            $stmt->close();
            return true;
        }else{
            $stmt->close();
            return false;
        }
    
    }
    





    public function listarCaes()
    {
        $sql = "SELECT * FROM animais where tipo = 'cao' ORDER BY ano";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animais(
                    $row['id'],
                    $row['nome_pet'],
                    $row['sexo'],
                    $row['tipo'],
                    $row['porte'],
                    $row['ano'],
                    $row['endereco'],
                    $row['ong']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }

    public function listarGatos()
    {
        $sql = "SELECT * FROM animais where tipo = 'gato' ORDER BY ano";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animais(
                    $row['id'],
                    $row['tipo'],
                    $row['nome_pet'],
                    $row['sexo'],
                    $row['porte'],
                    $row['ano'],
                    $row['endereco'],
                    $row['ong']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }

    
    public function listarCoelhos()
    {
        $sql = "SELECT * FROM animais where tipo = 'coelho' ORDER BY ano";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animais(
                    $row['id'],
                    $row['tipo'],
                    $row['nome_pet'],
                    $row['sexo'],
                    $row['porte'],
                    $row['ano'],
                    $row['endereco'],
                    $row['ong']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }

    public function listarPassaros()
    {
        $sql = "SELECT * FROM animais where tipo = 'passaro' ORDER BY ano";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animais(
                    $row['id'],
                    $row['tipo'],
                    $row['nome_pet'],
                    $row['sexo'],
                    $row['porte'],
                    $row['ano'],
                    $row['endereco'],
                    $row['ong']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }
    


}














