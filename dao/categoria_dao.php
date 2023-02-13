<?php

include_once("util/conexao.php");
include_once("model/Categoria.php");

    class CategoriaDAO{
        private const SQL_CATEGORIA = 'SELECT * FROM tb_categoria';

        private function mapCategorias($resultSql) {
            $categorias = array();
            foreach ($resultSql as $reg):
                $categoria = new Categoria();
                $categoria->setId($reg['id']);
                $categoria->setNome($reg['nome']);
                array_push($categorias, $categoria);
            endforeach;
    
            return $categorias;
        }

        public function list() {
            $conn = conectar_db();
    
            $sql = CategoriaDAO::SQL_CATEGORIA . " ORDER BY tb_categoria.nome";
            $stm = $conn->prepare($sql);    
            $stm->execute();
            $result = $stm->fetchAll();
    
            return $this->mapCategorias($result);
        }
        public function save(Categoria $categoria){
            $conn = conectar_db();

        $sql = "INSERT INTO tb_categoria (nome)".
            " VALUES (?,)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$categoria->getNome()]);
        } 
    }
?>