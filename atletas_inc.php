<?php
#Página com o formulário para incluir um aluno

include_once("controller/AtletaController.php");
include_once("controller/CategoriaController.php");
include_once("view/categoria_html.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("bootstrap/head.php"); ?>
</head>
<body>
    <?php include_once("bootstrap/menu.php"); ?>

    <h3 class="text-center">INSERIR ATLETA</h3>

    <div style="max-width: 50%; margin-left: 10px;">
        <form name="frmCadastroAtletas" method="POST" action="atletas_inc_exec.php" >
            <div class="form-group">
                <label for="txtNome">Nome:</label>
                <input class="form-control" type="text" id="txtNome" name="nome_atleta" 
                    size="45" maxlength="70" placeholder="Informe o nome" />
            </div>
            <div class="form-group">
                <label for="txtIdade">Idade:</label>
                <input class="form-control" type="number" id="txtIdade" name="idade_atleta" 
                    style="width: 100px;"/>
            </div>
            <div class="form-group">
                <label for="txtPeso">Peso(kgs):</label>
                <input class="form-control" type="number" id="txtPeso" name="peso_atleta" 
                    style="width: 100px;"/>
            </div>
            <div class="form-group">
                <label for="txtAltura">Altura(cm):</label>
                <input class="form-control" type="number" id="txtAltura" name="altura_atleta" 
                    style="width: 100px;"/>
            </div>
            <div class="form-group">
                <label for="txtGC">Gordura Corporal(%):</label>
                <input class="form-control" type="number" id="txtGC" name="gordura_atleta" 
                    style="width: 100px;"/>
            </div> 
            <div class="form-group">
                <label for="somCategoria">Categoria:</label>
                <?php
                    $categoriaCont = new CategoriaController();
                    $categorias = $categoriaCont->listar();

                    CategoriaHTML::desenhaSelect($categorias, "categoria_atleta", "somCategoria");
                ?>
            </div>         

            <button type="submit" class="btn btn-success">Gravar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </form>

        <div id="divErro" class="alert alert-danger" style="display: none; margin-top: 20px;" />

        <br><br>
        <a class="btn btn-outline-secondary" href="atletas_listar.php">Voltar</a>
    </div>

    <?php include_once("bootstrap/footer.php"); ?>

    <script src="js/alunos.js"></script>
</body>
</html>