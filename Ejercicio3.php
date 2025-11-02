<?php

/** Crea un script que calcule el área de un triángulo, solicitando la base y la altura al usuario. 
 * Muestra el resultado.
*/


    // Solicitar por teclado la base y la altura

    echo "Introduce la base del triángulo: ";
    fscanf(STDIN, "%f", $base);

    echo "Introduce la altura del triángulo: ";
    fscanf(STDIN, "%f", $altura);


    // Declarar y calcular la base a partir de la base y la altura

    $area = 0.5 * $base * $altura;


    // Imprimir resultado

    echo "El área del triángulo es de: " . $area . " unidades².";


    // Fin del programa

    echo "\nFin del programa. ¡Gracias por participar!";


?>