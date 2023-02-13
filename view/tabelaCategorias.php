<?php

class CategoriaHTML {

    public static function desenhaTabela($categorias) {
        echo "<table class='table table-striped table-bordered'>";

        echo "<thead>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Editar</th>";
        echo "<th scope='col'>Excluir</th>";
        echo "</thead>";
        echo "</div>";
        
        echo "<tbody>";
        foreach ($categorias as $categoria):
            echo "<tr>";
            echo "<td>". $categoria->getNome() ."</td>";
            
            //Editar
            echo "<td>". 
                "<a href='?id=". $categoria->getId() . "'>".
                "<img src='images/btn_editar.png'>" . "</a>".
            "</td>";
            
            //Excluir
            echo "<td>". 
                "<a href='?id=". $categoria->getId() . 
                "' onclick='return confirm(\"Confirma a exclusão da categoria?\");'".
                ">".
                "<img src='images/btn_excluir.png'>" . "</a>".
            "</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}
?>