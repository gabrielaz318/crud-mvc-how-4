<?php

require_once '../models/banco.php';

class Listar {
    private $listaConexao;

    public function __construct(){
        $this->listaConexao = new Banco();
        $this->montarTabela();

    }

    public function montarTabela() {
        $dados = $this->listaConexao->buscarJogos();

        foreach($dados as $linha) {
            echo "<tr>";
            echo    "<th scope='row'>".$linha['id']."</th>";
            echo    "<td>".$linha['nome']."</td>";
            echo    "<td>".$linha['genero']."</td>";
            echo    "<td>".$linha['ano_lancamento']."</td>";
            echo    "<td>".$linha['preco']."</td>";
            echo    "<td>";
            echo        "<a href='./editar.php?id=".$linha['id']."' class='btn btn-info'>Editar</a>";
            echo        "<a href='../controllers/ControllerDeletar.php?id=".$linha['id']."' class='btn btn-danger ms-3'>Apagar</a>";
            echo    "</td>";
			echo"</tr>";
        }
    }
}