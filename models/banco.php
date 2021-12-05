<?php

class Banco {
    private $host = 'localhost';
    private $dbname = 'lan_house';
    private $user = 'root';
    private $pass = '';
    private $conexao;

    public function __construct(){
        $this->conectar();
    }
    private function conectar() {
        try {
            $conexao = new PDO(
            "mysql:host=$this->host;
            dbname=$this->dbname",
            "$this->user",
            "$this->pass"
            );
            $this->conexao = $conexao;
        } catch(PDOException $erro) {
            echo '<p>'.$erro->getMessage().'</p>';
        }
    }
    public function buscarJogos() {
        $query = 'SELECT * FROM jogos WHERE status = 1';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function realizarCadastro($nome, $genero, $lancamento, $preco) {
        $query = "INSERT INTO jogos (nome, genero, ano_lancamento, preco) VALUES (?,?,?,?);";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $genero);
        $stmt->bindValue(3, $lancamento);
        $stmt->bindValue(4, $preco);
        $stmt->execute();
        return 1;
    }

    public function deletarRegistro($id) {
        $query = "UPDATE jogos SET status = 0 WHERE id = $id";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return 1;
    }

    public function buscaJogoId($id) {
        $query = "SELECT * FROM jogos WHERE id = $id";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function atualizarRegistroId($id, $nome, $genero, $lancamento, $preco) {
        $query = "UPDATE jogos SET nome = ?, genero = ?, ano_lancamento = ?, preco = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $genero);
        $stmt->bindValue(3, $lancamento);
        $stmt->bindValue(4, $preco);
        $stmt->bindValue(5, $id);
        $stmt->execute();
        return 1;
    }
}
