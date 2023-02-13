<?php
#Classe auxiliar para criar componentes HTML de Cursos

class CategoriaHTML {

    public static function desenhaSelect($categs, $name, $id, $idCategoriaSelec = 0) {
        echo "<select class='form-control' name='". $name ."' id='". $id ."'>";

        foreach($categs as $categ):
            echo "<option value='" .$categ->getId(). "'";

            if($categ->getId() == $idCategoriaSelec)
                echo " selected ";

            echo ">". $categ->getNome()."</option>";
        endforeach;

        echo "</select>";
    }

}

?>