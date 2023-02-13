<?php
include_once("util/conexao.php");
include_once("controller/AtletaController.php");
include_once("view/TabelasAtletas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("bootstrap/links.php");
    ?>
    <title>Listar Atletas</title>
</head>
<body>
    <?php
        include_once("bootstrap/navbar.php");
    ?>


    <div class="mx-2 my-2">

        <p class='text-center' style="font-weight : bold">ATLETAS</p>

        <?php
            $atletaCont = new AtletaController();
            $atletas = $atletaCont->listar();
        
            AtletaHTML::desenhaTabela($atletas);
        ?>
    </div>

</body>
</html>