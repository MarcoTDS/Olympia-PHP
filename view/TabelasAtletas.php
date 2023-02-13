<?php

class AtletaHTML {

    public static function desenhaTabela($atletas) {
        echo "<table class='table table-striped table-bordered'>";

        echo "<thead>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Idade</th>";
        echo "<th scope='col'>Peso</th>";
        echo "<th scope='col'>Altura</th>";
        echo "<th scope='col'>% Gordura</th>";
        echo "<th scope='col'>Categoria</th>";
        echo "<th scope='col'>Editar</th>";
        echo "<th scope='col'>Excluir</th>";
        echo "</thead>";
        echo "</div>";
        
        echo "<tbody>";
        foreach ($atletas as $atleta):
            echo "<tr>";
            echo "<td>". $atleta->getNome() ."</td>";
            echo "<td>". $atleta->getIdade() ."</td>";
            echo "<td>". $atleta->getPeso() ."</td>";
            echo "<td>". $atleta->getAltura() ."</td>";
            echo "<td>". $atleta->getGorduraCorp() ."</td>";
            echo "<td>". $atleta->getCategoria()->getNome() ."</td>";
            
            //Editar
            echo "<td>". 
                "<a href='?id=". $atleta->getId() . "'>".
                "<img src='images/btn_editar.png'>" . "</a>".
            "</td>";
            
            //Excluir
            echo "<td>". 
                "<a href='?id=". $atleta->getId() . 
                "' onclick='return confirm(\"Confirma a exclusão do atleta?\");'".
                ">".
                "<img src='images/btn_excluir.png'>" . "</a>".
            "</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}