<?php
include_once("util/conexao.php");
include_once("controller/CategoriaController.php");
include_once("view/tabelaCategorias.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("bootstrap/links.php");
    ?>
    <title>Listar Categorias</title>
</head>
<body>
    <?php
        include_once("bootstrap/navbar.php");
    ?>


    <div class="mx-2 my-2">

        <p class='text-center' style="font-weight : bold">CATEGORIAS</p>

        <?php
            $categoriaCont = new CategoriaController();
            $categorias = $categoriaCont->listar();
        
            CategoriaHTML::desenhaTabela($categorias);
        ?>
    </div>

</body>
</html>