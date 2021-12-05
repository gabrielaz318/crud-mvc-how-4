<?php

require_once '../models/banco.php';

class Deletar {
    private $deletarConexao;

    public function __construct(){
        $this->deletarConexao = new Banco();
        $this->deletar();
    }

    public function deletar() {
        $this->deletarConexao->deletarRegistro($_GET['id']);
        echo "<script>alert('Registro deletado com sucesso!');document.location='../views/index.php'</script>";
    }
}

new Deletar();

?>