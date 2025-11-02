<?php

/** Escribe el código que realice la siguiente funcionalidad: 
 * A partir de un número entero mayor de 10, muestra todos los números del 1 al número indicado y determina si cada número es par o impar.
*/


    // Introducir por teclado el número mayor de 10, mensaje de error si no es mayor de 10

    do {

        echo "Introduce un número mayor de 10: ";
        fscanf(STDIN, "%i", $num);

        if ($num <= 10) {
            echo "¡Debes introducir un número mayor de 10! Inténtalo de nuevo...\n";
        } 


    } while ($num <= 10);


    // Resultados

    echo "El número elegido es el " . $num . ". Los números anteriores hasta el " . $num  . " inclusive son:\n";

    
        // Recorrer todos los números al número indicado y determinar si son pares o impares

    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            echo $i . " (par)\n";
        } else {
            echo $i . " (impar)\n";
        }

    }


    // Fin del programa

    echo "Fin del programa. ¡Gracias por participar!";


?>