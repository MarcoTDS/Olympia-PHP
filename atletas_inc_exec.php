<?php

include_once("dao/atleta_dao.php");
include_once("controller/AtletaController.php");
include_once("model/Atleta.php");
include_once("model/Categoria.php");

$nome = $_POST['nome_atleta'];
$idade = $_POST['idade_atleta'];
$peso = $_POST['peso_atleta'];
$altura = $_POST['altura_atleta'];
$gordura = $_POST['gordura_atleta'];
$categoria = $_POST['categoria_atleta'];

$atleta = new Atleta();

$atleta->setNome($nome);
$atleta->setIdade($idade);
$atleta->setPeso($peso);
$atleta->setAltura($altura);
$atleta->setGorduraCorp($gordura);

$categoria = new Categoria($id);
$atleta->setCategoria($categoria);

$atletaCont = new AtletaController();
$atletaCont->salvar($atleta);


header("Location: atletas_listar.php");
