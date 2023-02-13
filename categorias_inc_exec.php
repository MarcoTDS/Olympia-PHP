<?php

include_once("model/Categoria.php");
include_once("controller/CategoriaController.php");

$nome = $_POST['nome_categoria'];

$categoria = new Categoria();
$categoria->setNome($nome);

$categoriaCont = new CategoriaController();
$categoriaCont->salvar($categoria);

header("Location: categorias_listar.php");
