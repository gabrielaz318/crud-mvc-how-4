<?php

require_once '../models/banco.php';

class Editar {
    private $editarConexao;

    public function __construct(){
        $this->editarConexao = new Banco();
    }

    public function editar($id){
        return $this->editarConexao->buscaJogoId($id);
    }

    public function realizarAtualizacao($id, $nome, $genero, $lancamento, $preco){
        $this->editarConexao->atualizarRegistroId($id, $nome, $genero, $lancamento, $preco);
        echo "<script>alert('Registro atualizado com sucesso!');document.location='../views/index.php'</script>";
    }
}

if(isset($_GET['id']) && isset($_GET['atualizar']) && $_GET['atualizar'] == '1') {
    $classeEditar = new Editar();

    $classeEditar->realizarAtualizacao($_GET['id'], $_POST['nome'], $_POST['genero'], $_POST['lancamento'], $_POST['preco']);
}

?>