<?php

require_once '../models/banco.php';

class Cadastrar {
    private $cadastroConexao;

    public function __construct(){
        $this->cadastroConexao = new Banco();
        $this->cadastrar();
    }

    public function cadastrar() {
        $this->cadastroConexao->realizarCadastro($_POST['nome'], $_POST['genero'], $_POST['lancamento'], $_POST['preco']);
        echo "<script>alert('Registro incluído com sucesso!');document.location='../views/cadastrar.php'</script>";
    }
}

new Cadastrar();
?>