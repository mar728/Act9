<?php

    $fila=1;
    $columna=1;
    $x=25;

    echo "<table border='1'>";
        for($fila=1; $fila <= $x; $fila++){
            echo "<tr>";
                for($columna = 1; $columna <= $x; $columna++){
                    if($fila%2 == 0){
                        if($columna%2 == 0){
                            echo "<td><img src='./blanco.jpg' width='100px' height='100px'></td>";
                        }
                        else{
                            echo "<td><img src='./negro.jpg' width='100px' height='100px'></td>";
                        }
                    }
                    if($fila%2 != 0){
                        if($columna%2 == 0){
                            echo "<td><img src='./negro.jpg' width='100px' height='100px'></td>";
                        }
                        else{
                            echo "<td><img src='./blanco.jpg' width='100px' height='100px'></td>";
                        }
                    }
                }
            echo "</tr>";
        }
    echo "</table>";


?>