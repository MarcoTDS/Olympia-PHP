
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("bootstrap/head.php"); ?>
</head>

<body>
    <?php include_once("bootstrap/menu.php"); ?>

    <h1 class="text-center">OLYMPIA</h1>
   
    <!-- Cards -->
    <div class="row" style="margin: 20px;">
        <div class="col-6">
            <div class="card text-center" style="width: 18rem;">
                <img class="mx-auto d-block" src="images/atletas.png" alt="Atletas"
                    style="max-width: 200px; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Atletas</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="atletas_listar.php" class="card-link">Listagem de Atletas</a></li>
                    <li class="list-group-item"><a href="atletas_inc.php" class="card-link">Inserir Atleta</a></li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-center" style="width: 18rem;">
                <img class="mx-auto d-block" src="images/categorias.png" alt="Categorias"
                    style="max-width: 200px; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Categorias</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="categorias_listar.php" class="card-link">Listagem de Categorias</a></li>
                    <li class="list-group-item"><a href="categorias_inc.php" class="card-link">Inserir Categoria</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include_once("bootstrap/footer.php"); ?>
</body>

</html>