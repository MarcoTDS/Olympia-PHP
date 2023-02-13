<?php

include_once("dao/categoria_dao.php");

class CategoriaController {

    private $categoriaDAO;

    public function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
    }

    public function listar() {
        return $this->categoriaDAO->list();
    }

    public function buscarPorId($id) {
        return $this->categoriaDAO->findById($id);
    }

    public function salvar($categoria) {
        $this->$categoriaDAO->save($categoria);
    }
    public function atualizar($categoria) {
        $this->$categoriaDAO->update($categoria);
    }

    public function excluir($categoria) {
        $this->$categoriaDAO->delete($categoria);
    }
}

?>