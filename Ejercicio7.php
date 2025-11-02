<?php

/** Escribe el código php que tome el año de nacimiento como entrada y calcule su edad. 
 * Luego, muestra la edad resultante. 
*/


    // Solicitar año de nacimiento por entrada

    echo "Introduce tu año de nacimiento: ";
    fscanf(STDIN, "%i", $nacimiento);


    // Obtener año actual

    $actual = (int) date("Y");



    // Calcular edad del usuario

    $edad = $actual - $nacimiento;

    if ($edad == 1) {
        echo "Tu edad es de " . $edad . " año.";
    } else {
        echo "Tu edad es de " . $edad . " años.";
    }


    // Fin del programa

    echo "\nFin del programa. ¡Gracias por participar!";
   

?>