<?php

include_once("dao/atleta_dao.php");

class AtletaController{

    private $atletaDAO;

    public function __construct(){
        $this->atletaDAO = new AtletaDAO();
    }

    public function listar(){
        return $this->atletaDAO->list();
    }

    public function buscarPorId($id){
        return $this->atletaDAO->findById($id);
    }

    public function salvar($atleta){
        $this->$atletaDAO->save($atleta);
    }
    public function atualizar($atleta){
        $this->$atletaDAO->update($atleta);
    }

    public function excluir($atleta){
        $this->$atletaDAO->delete($atleta);
    }
}