<?php
#Página com o formulário para incluir um aluno

include_once("controller/CategoriaController.php");
//include_once("view/categoria_html.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("bootstrap/head.php"); ?>
</head>
<body>
    <?php include_once("bootstrap/menu.php"); ?>

    <h3 class="text-center">INSERIR CATEGORIAS</h3>

    <div style="max-width: 50%; margin-left: 10px;">
        <form name="frmCadastroCategorias" method="POST" action="categorias_inc_exec.php" >
            <div class="form-group">
                <label for="txtNome">Nome:</label>
                <input class="form-control" type="text" id="txtNome" name="nome_categoria" 
                    size="45" maxlength="70" placeholder="Informe o nome" />
            </div>          

            <button type="submit" class="btn btn-success">Gravar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </form>

        <div id="divErro" class="alert alert-danger" style="display: none; margin-top: 20px;" />

        <br><br>
        <a class="btn btn-outline-secondary" href="categorias_listar.php">Voltar</a>
    </div>

    <?php include_once("bootstrap/footer.php"); ?>

    <script src="js/alunos.js"></script>
</body>
</html>