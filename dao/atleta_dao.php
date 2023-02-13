<?php

include_once("util/conexao.php");
include_once("model/Atleta.php");
include_once("model/Categoria.php");

class AtletaDAO{
    private const SQL_ATLETA = 'SELECT * FROM tb_atleta';
    private const SQL_ATLETA_ID = 'SELECT * FROM tb_atleta WHERE id = :id';
    private const SQL_ATLETA_NOME = 'SELECT * FROM tb_atleta WHERE nome = :nome';
    private const SQL_ATLETA_IDADE = 'SELECT * FROM tb_atleta WHERE idade = :idade';
    private const SQL_ATLETA_PESO = 'SELECT * FROM tb_atleta WHERE peso = :peso';
    private const SQL_ATLETA_ALTURA = 'SELECT * FROM tb_atleta WHERE altura = :altura';
    private const SQL_ATLETA_GORDURA_CORP = 'SELECT * FROM tb_atleta WHERE gordura_corporal = :gordura_corporal';
    private const SQL_ATLETA_CATEGORIA = 'SELECT * FROM tb_atleta WHERE categoria = :categoria';

    private function mapAtletas($resultSql) {
        $atletas = array();
        foreach ($resultSql as $reg):
            $atleta = new Atleta();
            $atleta->setId($reg['id']);
            $atleta->setNome($reg['nome']);
            $atleta->setIdade($reg['idade']);
            $atleta->setPeso($reg['peso']);
            $atleta->setAltura($reg['altura']);
            $atleta->setGorduraCorp($reg['gordura_corporal']);
            $categoria = new Categoria($reg['id_categoria'], $reg['categoria']);
            $atleta->setCategoria($categoria);
            array_push($atletas, $atleta);
        endforeach;

        return $atletas;
    }

    public function list() {
        $conn = conectar_db();

        $sql = AtletaDAO::SQL_ATLETA . " ORDER BY tb_atleta.nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->mapAtletas($result);
    }

    public function listById($id) {
        $conn = conectar_db();

        $sql = AtletaDAO::SQL_ATLETA_ID . " ORDER BY tb_atleta.nome";
        $stm = $conn->prepare($sql);    
        $stm->bindValue(':id', $id);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->mapAtletas($result);
    }
    public function save(Atleta $atleta){
        $conn = conectar_db();

        $sql = "INSERT INTO tb_atleta (nome, idade, peso, altura, gordura_corporal, id_categoria, categoria)".
            " VALUES (?, ?, ?, ?,?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$atleta->getNome(), $atleta->getIdade(), $atleta->getPeso(), $atleta->getAltura(),
                         $atleta->getGorduraCorp(), $atleta->getIdCategoria(), $atleta->getCategoria()]);
    }
}